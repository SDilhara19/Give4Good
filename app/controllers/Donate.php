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
            ;
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

        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $payhere_amount = $_POST['payhere_amount'];
        $payhere_currency = $_POST['payhere_currency'];
        $status_code = $_POST['status_code'];
        $md5sig = $_POST['md5sig'];

        $merchant_secret = MERCHANT_SECRET; // Replace with your Merchant Secret

        $local_md5sig = strtoupper(
            md5(
                $merchant_id .
                $order_id .
                $payhere_amount .
                $payhere_currency .
                $status_code .
                strtoupper(md5($merchant_secret))
            )
        );

        if (($local_md5sig === $md5sig) and ($status_code == 2)) {
            $this->donationModel->createDonationPayment();
        }
        else{
            $this->donationModel->createDonationPayment();
            
        }



        // $paymentData = [
        //     'user_id' => $_SESSION['userId'],
        //     'fundraiser_id' => $obj->data['fundraiser_id'], // Replace with the actual fundraiser_id
        //     'donated_amount' => $obj->data['donationAmount'],
        //     'contribution_amount' => $obj->data['contributeAmount'],
        //     'payment_date' => date('Y-m-d H:i:s'), // Assuming you want to use the current date and time
        // ];

        // if ($this->donationModel->createDonationPayment($paymentData)) {
        //     // Redirect or handle success
        //     redirect(URLROOT . '/Index');
        // } else {
        //     // Handle failure
        //     die("Something went wrong");
        // }
    }

}