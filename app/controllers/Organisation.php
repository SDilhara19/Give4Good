<?php

require APPROOT . '/lib/validation.php';
class Organisation extends controller
{
    private $OrganisationModel;
    public function __construct()
    {
        $this->OrganisationModel = $this->model('M_user');

    }

    public function index()
    {
        $this->checkUserLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->signup();
        } else {
            $data = [];
            $this->view('Organisation/V_Signup');
        }

    }

    private function checkUserLogin()
    {

        if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
            logOut();
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'individual')) {
            logOut();
        }
    }

    public function super()
    {
        if (!isloggedIn()) {
            redirect(URLROOT . '/Users');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'individual')) {
            redirect(URLROOT . '/Individual/super');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] !== 'organisation')) {
            logOut();
            redirect(URLROOT . '/Users');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->super_signup();
            } else {
                $data = [];
                $data['basic-data'] = $this->OrganisationModel->basicDataOrg($_SESSION['userId']);
                $this->view('Organisation/V_Super_Signup', $data);
            }
        }

    }


    public function signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('name', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        // $obj->validate('regno', ['EMPTY']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);
        // if ($this->OrganisationModel->findbyRegNo($obj->data['regno'])) {
        //     $obj->flag==1;
        //     $obj->data['regno_err'] = 'This Registration Number already exists';
        // }

        if ($this->OrganisationModel->findbyEmail($obj->data['email'])) {
            $obj->flag == 1;
            $obj->data['email_err'] = 'This email already registered';
        }
        if ($obj->flag == 1) {
            $this->view('Organisation/V_Signup', $obj->data);
        } else {
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);

            if ($this->OrganisationModel->register($obj->data)) {

                redirect(URLROOT . '/Users');
            } else {
                die("Something went wrong");
            }
        }

    }

    public function super_signup()
    {
        try {
            $obj = new Validation($_POST);
            $obj->data['user_id'] = $_SESSION['userId'];
            if ($obj->data['username']) {
                $obj->validate('username', ['EMPTY', 'FORMAT']);
            }
            $obj->validate('regNo', ['EMPTY']);
            $obj->validate('doReg', ['EMPTY']);

            $obj->validate('address', ['EMPTY']);
            $obj->validate('province', ['EMPTY']);
            $obj->validate('district', ['EMPTY']);
            $obj->validate('zipcode', ['EMPTY']);
            $obj->validate('contact', ['EMPTY']);

            $obj->validate('name', ['EMPTY']);
            $obj->validate('accountNo', ['EMPTY']);
            $obj->validate('bankcode', ['EMPTY']);
            $obj->validate('bank', ['EMPTY']);
            $obj->validate('branchcode', ['EMPTY']);
            $obj->validate('branch', ['EMPTY']);

            $obj->validate('ex-fullname', ['EMPTY']);
            $obj->validate('ex-designation', ['EMPTY']);
            $obj->validate('ex-nicNo', ['EMPTY']);
            $obj->validate('ex-address', ['EMPTY']);
            $obj->validate('ex-email', ['EMPTY', 'EMAIL']);
            $obj->validate('ex-contact', ['EMPTY']);

            $obj->validate('tr-fullname', ['EMPTY']);
            $obj->validate('tr-designation', ['EMPTY']);
            $obj->validate('tr-nicNo', ['EMPTY']);
            $obj->validate('tr-address', ['EMPTY']);
            $obj->validate('tr-email', ['EMPTY', 'EMAIL']);
            $obj->validate('tr-contact', ['EMPTY']);

            $obj->validate('sec-fullname', ['EMPTY']);
            $obj->validate('sec-designation', ['EMPTY']);
            $obj->validate('sec-nicNo', ['EMPTY']);
            $obj->validate('sec-address', ['EMPTY']);
            $obj->validate('sec-email', ['EMPTY', 'EMAIL']);
            $obj->validate('sec-contact', ['EMPTY']);


            if ($_FILES['profile-image']) {
                $obj->imageUpload('Profile-image', $_FILES['profile_image'], '', 'profile_image');
            }

            $obj->imageUpload('Organisation/Registration', $_FILES['reg_certificate'], '', 'reg_certificate');
            $obj->imageUpload('Organisation/Certification', $_FILES['certification'], '', 'certification');
            $obj->imageUpload('Bank-passbook', $_FILES['pass_book'], '', 'pass_book');
            $obj->imageUpload('Organisation/Executive_nic_front', $_FILES['ex-nic_front_image'], '', 'ex-nic_front_image');
            $obj->imageUpload('Organisation/Executive_nic_back', $_FILES['ex-nic_back_image'], '', 'ex-nic_back_image');
            $obj->imageUpload('Organisation/Treasurer_nic_front', $_FILES['tr-nic_front_image'], '', 'tr-nic_front_image');
            $obj->imageUpload('Organisation/Treasurer_nic_back', $_FILES['tr-nic_back_image'], '', 'tr-nic_back_image');
            $obj->imageUpload('Organisation/Secretary_nic_front', $_FILES['sec-nic_front_image'], '', 'sec-nic_front_image');
            $obj->imageUpload('Organisation/Secretary_nic_back', $_FILES['sec-nic_back_image'], '', 'sec-nic_back_image');



            // $this->view('test', $obj);



            if ($obj->flag == 1) {
                // var_dump("flahg");
                $this->view('Organisation/V_Super_Signup', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->OrganisationModel->superRegisterOrg($obj->data)) {


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






