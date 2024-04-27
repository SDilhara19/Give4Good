<?php
class Merchandise extends controller
{
    private $MerchandiseModel;
    public function __construct()
    {
        $this->MerchandiseModel = $this->model('M_Merchandise');
        $this->checkUserLogin();

    }

    private function checkUserLogin()
    {

        if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
            logOut();
        }
    }

    public function buy($id, $fundraiser)
    {
        try {
            $data['merchandise'] = $this->MerchandiseModel->getAMerchandise($id);
            $data['fundraiser'] = $this->MerchandiseModel->getAFundraiser($fundraiser);
            $data['location'] = $this->MerchandiseModel->getDeliveryDetails($_SESSION['userId']);

            $amount_for_fund = $data['merchandise'][0]->amount_for_fund;
            $price = $data['merchandise'][0]->price;
            $data['merchandise'][0]->percent_for_fund = round(($amount_for_fund / $price) * 100, 2);

            // print_r($merch[0]->product_name);
            $this->view('Merchandise/V_Buy', $data);
        } catch (PDOException $e) {

            echo "Error: " . $e->getMessage();
            return false;
        }

    }
}
