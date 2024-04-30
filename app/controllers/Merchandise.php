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


    public function index()
    {
        // var_dump("d");
        $data = $this->MerchandiseModel->getAllMerchandise();
        $this->view('Merchandise/V_All', $data);
        // var_dump($data);


    }

    public function one($id)
    {
        // var_dump("d");
        $data = $this->MerchandiseModel->getAMerchandise($id);

        // print_r();
        $this->view('Merchandise/V_One', $data);
        // $this->view('test', $data);
        // var_dump($data);


    }



    public function buy($id, $fundraiser)
    {
        try {

            if (!isloggedIn() || (isset($_SESSION['userType']) && ($_SESSION['userType'] !== 'individual' && $_SESSION['userType'] !== 'organisation'))) {
                logOut();
                redirect(URLROOT . '/Users');
            } else {

                $data['merchandise'] = $this->MerchandiseModel->getAMerchandise($id);
                $data['fundraiser'] = $this->MerchandiseModel->getAFundraiser($fundraiser);
                $data['location'] = $this->MerchandiseModel->getDeliveryDetails($_SESSION['userId']);

                $amount_for_fund = $data['merchandise'][0]->amount_for_fund;
                $price = $data['merchandise'][0]->price;
                $data['merchandise'][0]->percent_for_fund = round(($amount_for_fund / $price) * 100, 2);

                // print_r($merch[0]->product_name);
                $this->view('Merchandise/V_Buy', $data);
            }
        } catch (PDOException $e) {

            echo "Error: " . $e->getMessage();
            return false;
        }

    }

    public function payment()
    {
        try {
            $postData = file_get_contents("php://input");

            // Decode the JSON data
            $jsonData = json_decode($postData);


            // Access the "donateAmount" and "contributeAmount" properties from the JSON data
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $merch_id = $_POST['merch_id'];
            $merchant_id = 1226076;
            $order_id = uniqid();
            $amount = $price * $quantity;

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
            $array["price"] = $price;
            $array["quantity"] = $quantity;
            $array["merch_id"] = $merch_id;
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
        $this->MerchandiseModel->merch_buy();

            $data = [];
            $data['payment_id'] = $_POST['payment_id'];
            $data['user_id'] = $_SESSION['userId'];
            $data['merch_id'] = $_POST['merch_id'];
            $data['quantity'] = $_POST['quantity'];
            $data['total'] = $_POST['total'];

           




        $this->MerchandiseModel->merch_buy();
        }


    }

    public function payConfirm()
    {
        // print_r('d');
        $payment_id = $_GET['payment_id'];
        $merch_id = $_GET['merch_id'];
        $total = $_GET['total'];
        $quantity = $_GET['quantity'];

        $info = $this->MerchandiseModel->getAMerchandise($merch_id);

        $amount_for_fund = $info[0]->amount_for_fund;



        $data = array(
            'payment_id' => $payment_id,
            // 'merch_info' => $merch_info,
            'fundraiser_title' => $info[0]->fundraiser_title,
            'merch_id' => $merch_id,
            'merch_image' => $info[0]->merch_image,
            'merch_name' => $info[0]->product_name,
            'description' => $info[0]->description,
            'price' => $info[0]->price,
            'total' => $total,
            'quantity' => $quantity,
            'contribution' => $amount_for_fund * $quantity

        );

        // print_r($data);
// print_r($data['merchandise']);
        // print_r($info);
        $this->view('Merchandise/V_BuyConfirm', $data);
        // $this->view('test', $_GET);

    }
}
