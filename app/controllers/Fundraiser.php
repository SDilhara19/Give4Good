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

            $progress = $data['fundraiser'][0]->amount_collected;
            $total = $data['fundraiser'][0]->amount;
            $data['fundraiser'][0]->progress = ($progress / $total) * 100;

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

    public function start()
    {

        $this->view('Fundraisers/V_Start');
    }

    private function paymentHash()
    {
        try {
            $merchant_id = 1226076;
            $order_id = 2;
            $amount = 100;
            $currency = "LKR";
            $merchant_secret = "Mzg3MTExODE5MTc1Mzk3NDM4MTM0MzIwNTAzMzUyNjg3ODgwMDA=";
            $hash = strtoupper(
                md5(
                    $merchant_id .
                    $order_id .
                    number_format($amount, 2, '.', '') .
                    $currency .
                    strtoupper(md5($merchant_secret))
                )
            ); 
            return $hash;
        } catch (Exception $e) {
            return $e;
        }

    }

    public function pay($id)
    {
        $data['details'] = $this->fundraiserModel->payForm($id);
        $data['hash'] = $this->paymentHash();
    
        $this->view('Fundraisers/V_Pay', $data);
    }
}
