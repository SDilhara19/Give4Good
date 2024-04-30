<<<<<<< HEAD
<?php
class Index extends controller
{
  private $IndexModel;
  public function __construct()
  {
    $this->IndexModel = $this->model('M_Index');
    $this->checkUserLogin();

  }

  private function checkUserLogin()
  {

    if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
      logOut();
    }
  }

  public function index()
  {
    try {
      
      $data[0] = $this->fundraiserPriority();
      $data[1] = $this->IndexModel->getAllStories();

      foreach ($data[0] as $fundraiser) {
        $progress = $fundraiser->amount_collected;
        $total = $fundraiser->amount;
        $fundraiser->progress = ($progress / $total) * 100;

      }

      $this->view('Index/V_Index', $data);
    } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
      return false;
    }

  }

  private function fundraiserPriority()
  {
      $data = $this->IndexModel->getAllFundriasers();
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

      usort($data, array($this,'comparator'));
      // $this->view('temp', $data);

      $data = array_slice($data, 0, 5);
      return $data;

      //score = category_mark * 25/5 + type_mark * 25/25 + parent_funding_mark * 5 + ((amount - amount_collected)/(end_date - created_date)) * 45
  }

  private function comparator($obj1, $obj2) { 
    return $obj2->score <=> $obj1->score; 
} 

}
=======
<?php
class Index extends controller
{
  private $IndexModel;
  public function __construct()
  {
    $this->IndexModel = $this->model('M_Index');
    $this->checkUserLogin();

  }

  private function checkUserLogin()
  {

    if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
      logOut();
    }
  }

  public function index()
  {
    try {
      
      $data[0] = $this->fundraiserPriority();
      $data[1] = $this->IndexModel->getAllStories();

      foreach ($data[0] as $fundraiser) {
        $progress = $fundraiser->amount_collected;
        $total = $fundraiser->amount;
        $fundraiser->progress = ($progress / $total) * 100;

      }

      $this->view('Index/V_Index', $data);
    } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
      return false;
    }

  }

  private function fundraiserPriority()
  {
      $data = $this->IndexModel->getAllFundriasers();
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

      usort($data, array($this,'comparator'));
      // $this->view('temp', $data);

      $data = array_slice($data, 0, 5);
      return $data;

      //score = category_mark * 25/5 + type_mark * 25/25 + parent_funding_mark * 5 + ((amount - amount_collected)/(end_date - created_date)) * 45
  }

  private function comparator($obj1, $obj2) { 
    return $obj2->score <=> $obj1->score; 
} 

}
>>>>>>> main
