<?php

class Fundraiser extends controller
{
    private $fundraiserModel;
    public function __construct()
    {
        $this->fundraiserModel = $this->model('M_Fundraiser');

    }

    public function index()
    {
        $data = $this->fundraiserModel->getAllFundriasers();

        foreach ($data as $fundraiser) {
            $progress = $fundraiser->amount_collected;
            $total = $fundraiser->amount;
            $fundraiser->progress = ($progress / $total) * 100;

        }
        $this->view('Fundraisers/V_Fundraisers-all', $data);
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

            $progress = $data['fundraiser'][0]->amount_collected;
            $total = $data['fundraiser'][0]->amount;
            $data['fundraiser'][0]->progress = ($progress / $total) * 100;

            foreach ($data['merchandise'] as $merch){
            $amount_for_fund = $merch->amount_for_fund;
            $price = $merch->price;
            $merch->percent_for_fund = round(($amount_for_fund / $price) * 100, 2);
            }
            $newViews = $data['fundraiser'][0]->view_counts + 1;
            $data['fundraiser'][0]->view_counts = $newViews;
            if ($this->fundraiserModel->updateViews($newViews, $data['fundraiser'][0]->fundraiser_id)) {
                $this->view('Fundraisers/V_Fundraiser', $data);
                // var_dump($data['images'][0]);
            }

        } catch (Exception $e) {
            error_log('Error in fundraiser: ' . $e->getMessage());
            echo "Error: " . $e->getMessage();
        }
    }
 
    public function complaints(){

    $this->view('Fundraisers/V_complaint');
    }
}

?>
