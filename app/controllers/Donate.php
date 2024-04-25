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
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){ // $postData = file_get_contents("php://input");
        // $jsonData = json_decode($postData);
           print_r("ll");
        $total_price = $_POST['total_price'];
        $order_id = $_POST['order_id'];
    
        // // // // Now you can use $total_price and $order_id as needed
        // // // // For example:
        echo "Total Price: " . $total_price . "<br>";
        echo "Order ID: " . $order_id;
        // $defined_vars = get_defined_vars();
        // print_r($defined_vars);
        }
        $this->donationModel->createDonationPayment();
       
        // $this->view('Fundraisers/V_Donate_Confirm');
    }


    public function Order(){
        if (!isLoggedInCustomer()) {
            redirect('landing/login');
        } else {
            $user_id = $_SESSION['user_id'];
           
            $customerDetails = $this->customerModel->findCustomerById($user_id);
            $orderDetails=$this->ordersModel->findOrdersByCustomerId( $customerDetails[0]->customer_id);
            // $orderDetails01 = $this->ordersModel->findOrdersByCustomerId($$orderDetails->order_id);

            $orderDetailsArray = [];
            foreach ($orderDetails as $order) {
                $orderDetailsArray[$order->order_id] = $this->ordersModel->findOrdersByOrderId($order->order_id);
            }

            $data = [
                'customerDetails' => $customerDetails,
                'customerImage' => $customerDetails[0]->profile_img,
                'customerName' => $customerDetails[0]->first_name,
                'orderDetails' => $orderDetails,
                'orderDetailsArray' => $orderDetailsArray
            ];
           
            $this->view('customer/Order', $data);
        }
    }

    public function successCardPaymentOrder(){
        $user_id = $_SESSION['user_id'];
        $customerDetails = $this->customerModel->findCustomerById($user_id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['total_price'], $_POST['order_id'])) {
                $totalPrice = $_POST['total_price'];
                $order_id = $_POST['order_id'];
                $customer_id = $customerDetails[0]->customer_id;
    
                $trackingNumber = $this->generateUniqueTrackingNumber($order_id);
                $orderDetails = $this->adminModel->getOrderDetailsById($order_id);
                $bookIds = $this->ordersModel->getOrderDetailsFromOrderDetailsById($order_id);
                $ownerEmails = array();
    
                foreach ($bookIds as $bookIdObj) {
                    $bookId = $bookIdObj->book_id;
                    $bookDetails = $this->adminModel->getBookDetailsById($bookId);
                    
                    if ($bookDetails[0]->type == 'new') {
                        $user_idPub = $bookDetails[0]->publisher_id;
                        $ownerDetails = $this->adminModel->getPublisherDetailsById($user_idPub);
                    } else if ($bookDetails[0]->type == 'used' || $bookDetails[0]->type == 'exchanged') {
                        $user_idPub = $bookDetails[0]->customer_id;
                        $ownerDetails = $this->adminModel->getCustomerDetailsById($user_idPub);
                    }
    
                    $ownerEmails[] = $ownerDetails[0]->email;
                    $owner_user_id[] = $ownerDetails[0]->email;
    
                }
                
                $orderedCustomerDetails = $this->adminModel->getCustomerDetailsById($orderDetails[0]->customer_id);
                $customerEmail = $orderedCustomerDetails[0]->email;
    
                $topic = "New Order Details";
                $message = "Congratulations! Your order has been processing now. Order will be received at home as soon as possible.";
                $messageToPublisher = "Congratulations! You have a new order. Login to the site and visit your order status by this tracking number " . $orderDetails[0]->tracking_no;
    
                $data = [
                    'customer_id' => $customer_id,
                    'order_id' => $order_id,
                    'formType' => "cardPayment",
                    'trackingNumber' => $trackingNumber,
                    'topic' => $topic,
                    'messageToPublisher' => $messageToPublisher,
                    'message' => $message,
                    'user_id' => $orderedCustomerDetails[0]->user_id,
                    'sender_name' => 'system administration',
                    'sender_id' => 130,   
                ];
                
    
                if ($this->customerModel->editOrderCardPayment($data)) {
                    $this->sendEmails($customerEmail, $ownerEmails, $data);
                    $this->sendNotifications($data, $owner_user_id);
                    echo '<script>alert("You have placed an order successfully")</script>';
                    flash('update_success', 'You have placed an order successfully');
                    redirect('customer/Order');
                    // $this->view('customer/Order', $data);
                } else {
                    die('Something went wrong');
                }
            }
        }
    }
}



