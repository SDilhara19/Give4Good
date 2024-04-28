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


    public function index(){
        // var_dump("d");
        $data = $this->MerchandiseModel->getAllMerchandise();
        $this->view('Merchandise/V_All', $data);
        // var_dump($data);


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

}
