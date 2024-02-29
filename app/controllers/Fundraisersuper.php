<?php
require APPROOT . '/lib/validation.php';

class Fundraisersuper extends controller
{
    private $superFundraiserModel;
    public function __construct()
    {
        $this->superFundraiserModel = $this->model('M_Super_Fundraiser');

    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->fundraiser_start();
        } else {
            $data = [];
            // var_dump($_SESSION['userId']);
            $this->view('Fundraisers/V_Start', $data);
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
            if (!isset($_POST['anonymous'])){
                $obj->data['anonymous']= 0;
            }
            $obj->validate('anonymous', ['CHECKBOX']);
            if (!isset($_POST['child'])){
                $obj->data['child']= 0;
            }
            $obj->validate('child', ['CHECKBOX']);
            $obj->validate('end_date', ['EMPTY']);



            if ($obj->flag == 1) {
                $this->view('Fundraisers/V_Start', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->superFundraiserModel->fundraiserStart($obj->data)) {
                    //change redirection

                    redirect(URLROOT . '/Users');
                } else {
                    die("Something went wrong");
                }
            }
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

}
