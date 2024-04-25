<?php
class Donate extends controller
{
    private $donationModel;
    public function __construct()
    {
        $this->donationModel = $this->model('M_Donations');
        $this->checkUserLogin();

    }

    private function checkUserLogin()
    {
        if (!isloggedIn() || (isset($_SESSION['userType']) && ($_SESSION['userType'] !== 'individual' && $_SESSION['userType'] !== 'organisation'))) {
            logOut();
            redirect(URLROOT . '/Users');
        }
    }


    public function pay($id)
    {
        try {
            $data = $this->donationModel->fundTitle2($id);
            $this->view('Fundraisers/V_Pay', $data);
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

    public function payG()
    {
        try {
            $postData = file_get_contents("php://input");

            // Decode the JSON data
            $jsonData = json_decode($postData);
           

            // Access the "donateAmount" and "contributeAmount" properties from the JSON data
            $donationAmount = $_POST['donationAmount'];
            $contributionAmount = $_POST['contributionAmount'];
            $merchant_id = 1226076;
            $order_id = uniqid();
            $amount = $donationAmount + $contributionAmount;
        
            $currency = "LKR";
            $merchant_secret = MERCHANT_SECRET;
            $hash = strtoupper(
                md5(
                    $merchant_id .
                    $order_id .
                    number_format($amount, 2, '.', '') .
                    $currency .
                    strtoupper(md5($merchant_secret))
                )
            );

            $array = [];

            $array["amount"] = $amount;
            $array["merchant_id"] = $merchant_id;
            $array["order_id"] = $order_id;
            $array["currency"] = $currency;
            $array["donateAmount"] = $donationAmount;
            $array["contributeAmount"] = $contributionAmount;
            $array["hash"] = $hash;


            $jsonObj = json_encode($array);

            echo $jsonObj;
        } catch (Exception $e) {
            return $e;
        }

    }



    public function paydone()
    {
        print_r("ds");
        $this->donationModel->createDonationPayment();
       
       
    }

}