<?php
require APPROOT . '/lib/validation.php';
class Fundraiser extends controller
{
    private $fundraiserModel;
    public function __construct()
    {
        $this->fundraiserModel = $this->model('M_Fundraiser');

    }

    public function index()
    {
        $data = $this->fundraiserPriority();
        $this->view('Fundraisers/V_Fundraisers-all', $data);
        // $this->view('temp', $data);

    }

    public function fundraiser($id)
    {
        try {
            $data['fundraiser'] = $this->fundraiserModel->getAFundraiser($id);
            $data['images'] = $this->fundraiserModel->getImages($id);
            $data['merchandise'] = $this->fundraiserModel->getMerchandise($id);
            $data['materials'] = $this->fundraiserModel->getMaterials($id);
            $data['locations'] = $this->fundraiserModel->getMaterialLocation($id);
            $data['map_locations'] = $this->fundraiserModel->getMapLocation($id);

            if ($data['fundraiser'][0]->parent_funding == 1) {
                $data['child'] = $this->fundraiserModel->getChildDetails($id);

            }

            $amountCollected = $data['fundraiser'][0]->amount_collected;
            $total = $data['fundraiser'][0]->amount;
            $progress = ($amountCollected / $total) * 100;
            if ($progress >= 100) {
                $data['fundraiser'][0]->progress = 100;
            } else if ($progress < $total) {
                $data['fundraiser'][0]->progress = $progress;
            }

            foreach ($data['merchandise'] as $merch) {
                $amount_for_fund = $merch->amount_for_fund;
                $price = $merch->price;
                $merch->percent_for_fund = round(($amount_for_fund / $price) * 100, 2);
            }
            $newViews = $data['fundraiser'][0]->view_counts + 1;
            $data['fundraiser'][0]->view_counts = $newViews;
            if ($this->fundraiserModel->updateViews($newViews, $data['fundraiser'][0]->fundraiser_id)) {
                $this->view('Fundraisers/V_Fundraiser', $data);
            }

        } catch (Exception $e) {
            error_log('Error in fundraiser: ' . $e->getMessage());
            echo "Error: " . $e->getMessage();
        }
    }

    public function complaints($id)
    {
      var_dump($id);

    $this->checkUserLogin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      var_dump($id);
      
    //   $this->process_complaint($id);
    } else {
      $data = [];
      $data=$this->fundraiserModel->getAFundraiser($id);
        $this->view('Fundraisers/V_complaint', $data);
    }
       
        // var_dump($data);
    }


   private function process_complaint($id)
  {
    $obj = new Validation($_POST);
    $obj->data['user_id'] = $_SESSION['userId'];
    $obj->data['fundraiser_id'] = $id;
    $obj->validate('reason', ['EMPTY']);
     if ($obj->data['contact'] == 'option1') {
      $obj->data['phone']=$_SESSION['userContact'];
      $obj->data['email']=$_SESSION['userEmail'];
    }


    $obj->imageUpload('Complaints', $_FILES['complaint_image'], '', 'complaint_image');
    

    if ($obj->flag == 1) {
        $this->view('Fundraisers/V_complaint', $obj->data);
       
    } else {
        print_r($obj->data);
      if ($this->fundraiserModel->complaints($obj->data)) {
            redirect(URLROOT . '/Index');
          } else {
            die("Something went wrong");
          }
      
        }


    }
private function checkUserLogin()
    {
      if (!isloggedIn()){
        redirect(URLROOT . '/Users');
      }
  else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
        logOut();
        redirect(URLROOT . '/Users');

      }

  }


    private function fundraiserPriority()
    {
        $data = $this->fundraiserModel->getAllFundriasers();
        // var_dump($data);
        foreach ($data as $fundraiser) {

            $progress = $fundraiser->amount_collected;
            $total = $fundraiser->amount;
            $fundraiser->progress = ($progress / $total) * 100;


            $category_mark = match ($fundraiser->Category) {
                "health", "disasters" => 5,    /*  5/5  */
                "education", "Housing" => 4,     /*  4/5  */
                "sport" => 3,   /*  3/5  */
                "environment", "animals", "community" => 2,     /*  2/5  */
            };

            $type_mark = match ($fundraiser->type) {
                "individual" => 23,   /*  23/25  */
                "organisation" => 21,   /*  21/25  */
            };

            $parent_funding_mark = $fundraiser->parent_funding;

            $amount_remaining = $fundraiser->amount - $fundraiser->amount_collected;

            $createdDate = DateTime::createFromFormat('Y-m-d', $fundraiser->created_date);
            $endDate = DateTime::createFromFormat('Y-m-d', $fundraiser->end_date);

            $days_remaining = date_diff($createdDate, $endDate);

            $requirement_per_day = $amount_remaining / $days_remaining->days;
            $fundraiser->requirement_per_day = number_format($requirement_per_day / 45, 6);


            $fundraiser->score = $category_mark * 25 / 5 + $type_mark * 25 / 25 + $parent_funding_mark * 5 + $requirement_per_day / 45;

        }

        usort($data, array($this, 'comparator'));


        // $this->view('temp', $data);

        return $data;
        //score = category_mark * 25/5 + type_mark * 25/25 + parent_funding_mark * 5 + ((amount - amount_collected)/(end_date - created_date)) * 45
    }

    private function comparator($obj1, $obj2)
    {
        return $obj2->score <=> $obj1->score;
    }

}

?>