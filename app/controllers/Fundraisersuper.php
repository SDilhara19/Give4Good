<?php
require APPROOT . '/lib/validation.php';

class Fundraisersuper extends controller
{
    private $superFundraiserModel;
    public function __construct()
    {
        $this->superFundraiserModel = $this->model('M_Super_Fundraiser');
        $this->checkUserLogin();
    }

    private function checkUserLogin()
    {
        if (isloggedIn()) {
            if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'individual')) {
                if ($_SESSION['userLevel'] == 1) {
                    redirect(URLROOT . '/Individual/super');
                }
            } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
                if ($_SESSION['userLevel'] == 1) {
                    redirect(URLROOT . '/Organisation/super');
                }
            } else {
                logOut();
                redirect(URLROOT . '/Users');
            }


        } else {
            logOut();
            redirect(URLROOT . '/Users');
        }
    }

    public function index()
    {
        if ($_SESSION['userType'] == 'individual') {
            $this->view('Fundraisers/V_Category_Individual');
        }
        else if ($_SESSION['userType'] == 'organisation') {
            $this->view('Fundraisers/V_Category_Organisation');
        }
    }

    public function istart($category)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_POST);
            var_dump("___________________");
            var_dump($_FILES);
            // $this->fundraiser_start();
        } else {
            $data = [];
            $data['documents'] = $this->superFundraiserModel->iFindDocuments($category);
            // var_dump($data['documents'][0]->document);
            $this->view('Fundraisers/V_Start_Individual', $data);
        }

    }

    private function fundraiser_start()
    {
        try {
            $obj = new Validation($_POST);
            $obj->data['user_id'] = $_SESSION['userId'];
            $obj->validate('title', ['EMPTY']);
            $obj->validate('fund_story', ['EMPTY']);
            $obj->validate('amount', ['EMPTY']);
            if (!isset($_POST['anonymous'])) {
                $obj->data['anonymous'] = 0;
            }
            $obj->validate('anonymous', ['CHECKBOX']);
            if (!isset($_POST['child'])) {
                $obj->data['child'] = 0;
            }
            $obj->validate('child', ['CHECKBOX']);
            $obj->validate('end_date', ['EMPTY']);

            // $obj->imageUpload('Fundraisers', $_FILES['fundraiser_image_1'], $obj->data['fundraiser_title_1'], 'fundraiser_image_1');


            if ($obj->flag == 1) {
                $this->view('Fundraisers/V_Start', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->superFundraiserModel->fundraiserStart($obj->data)) {
                    //change redirection

                    redirect(URLROOT . '/Index');
                } else {
                    die("Something went wrong");
                }
            }
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

}

