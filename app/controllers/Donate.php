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
            $fundraiser_id = $_POST['fundraiser_id'];
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
            $array["fundraiser_id"] = $fundraiser_id;
            $array["hash"] = $hash;


            $jsonObj = json_encode($array);

            echo $jsonObj;
        } catch (Exception $e) {
            return $e;
        }

    }



    public function paydone()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // $postData = file_get_contents("php://input");
            $data = [];
            $data['payment_id'] = $_POST['payment_id'];
            $data['user_id'] = $_SESSION['userId'];
            $data['fundraiser_id'] = $_POST['fundraiser_id'];
            $data['donated_amount'] = $_POST['donated_amount'];
            $data['contribution_amount'] = $_POST['contribution_amount'];

            $this->donationModel->createDonationPayment($data);




        }


    }

    public function payConfirm(){
        $payment_id = $_GET['payment_id'];
        $fundraiser_id = $_GET['fundraiser_id'];
        $donated_amount = $_GET['donated_amount'];
        $contribution_amount = $_GET['contribution_amount'];
    
        $fundraiser_info= $this->donationModel->fundTitle2($fundraiser_id);

        // Now you can use these parameters as needed
        // For example, you can pass them to the view
        $data = array(
            'payment_id' => $payment_id,
            'fundraiser_title' => $fundraiser_info->title,
            'fundraiser_id' => $fundraiser_id,
            'donated_amount' => $donated_amount,
            'contribution_amount' => $contribution_amount

        );


    
        $this->view('Fundraisers/V_Donate_Confirm', $data);
        
    }
}



