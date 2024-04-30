<<<<<<< HEAD
<?php

require APPROOT . '/lib/validation.php';
class Individual extends controller
{
    private $IndividualModel;
    public function __construct()
    {
        $this->IndividualModel = $this->model('M_user');
        // $this->IndividualModel = $this->model('M_Individual');

    }

    public function index()
    {
        $this->checkUserLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->signup();
            //var_dump($_POST);
        } 
        else { 
            $data=[];
        $this->view('Individual/V_Signup', $data);
            // var_dump($_POST);
        }
    }

    private function checkUserLogin()
    {

        if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
            logOut();
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
            logOut();
        }
    }

    public function super()
    {
        if (!isloggedIn()) {
            redirect(URLROOT . '/Users');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
            redirect(URLROOT . '/Organisation/super');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] !== 'individual')) {
            logOut();
            redirect(URLROOT . '/Users');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // var_dump("s");
                $this->super_signup();
                // $this->view('test');

            } else {
                $data = [];
                $data['basic-data'] = $this->IndividualModel->basicData($_SESSION['userId']);
                // var_dump($data);
                $this->view('Individual/V_Super_Signup', $data);
                // $this->view('test', $data['basic-data']);

            }
        }

    }



    public function signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if ($this->IndividualModel->findbyUsername($obj->data['username'])) {
            $obj->flag == 1;
            $obj->data['username_err'] = 'This username already exists';
        }

        if ($this->IndividualModel->findbyEmail($obj->data['email'])) {
            $obj->flag == 1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if ($obj->flag == 1) {
            $this->view('Individual/V_Signup', $obj->data);
        } else {
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);


            if ($this->IndividualModel->register($obj->data)) {


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
            if ($obj->data['username']){
                $obj->validate('username', ['EMPTY', 'FORMAT']);
            }
            // print_r($obj->data);
            $obj->validate('fullname', ['EMPTY', 'FORMAT']);
            $obj->validate('nicNo', ['EMPTY']);
            $obj->validate('dob', ['EMPTY']);
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

            if ($_FILES['profile_image']['name']){
                $obj->imageUpload('Profile-image', $_FILES['profile_image'], $obj->data['profile_image'], 'profile_image');
            }
            // $this->view('test', $obj);

            $obj->imageUpload('NIC-front', $_FILES['nic_front_image'], $obj->data['nic_front_image'], 'nic_front_image');
            $obj->imageUpload('NIC-back', $_FILES['nic_back_image'], $obj->data['nic_back_image'], 'nic_back_image');
            $obj->imageUpload('Bank-passbook', $_FILES['pass_book'], $obj->data['pass_book'], 'pass_book');

                // $this->view('test', $obj);
                // print_r("d");
            if ($obj->flag == 1) {
                // print_r($_POST);
                // print_r("ST");
                // print_r($obj->data);
                $this->view('Individual/V_Super_Signup', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->IndividualModel->superRegister($obj->data)) {


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



=======
<?php

require APPROOT . '/lib/validation.php';
class Individual extends controller
{
    private $IndividualModel;
    public function __construct()
    {
        $this->IndividualModel = $this->model('M_user');
        // $this->IndividualModel = $this->model('M_Individual');

    }

    public function index()
    {
        $this->checkUserLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->signup();
            //var_dump($_POST);
        } 
        else { 
            $data=[];
        $this->view('Individual/V_Signup', $data);
            // var_dump($_POST);
        }
    }

    private function checkUserLogin()
    {

        if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
            logOut();
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
            logOut();
        }
    }

    public function super()
    {
        if (!isloggedIn()) {
            redirect(URLROOT . '/Users');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
            redirect(URLROOT . '/Organisation/super');
        } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] !== 'individual')) {
            logOut();
            redirect(URLROOT . '/Users');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // var_dump("s");
                $this->super_signup();
                // $this->view('test');

            } else {
                $data = [];
                $data['basic-data'] = $this->IndividualModel->basicData($_SESSION['userId']);
                // var_dump($data);
                $this->view('Individual/V_Super_Signup', $data);
                // $this->view('test', $data['basic-data']);

            }
        }

    }



    public function signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if ($this->IndividualModel->findbyUsername($obj->data['username'])) {
            $obj->flag == 1;
            $obj->data['username_err'] = 'This username already exists';
        }

        if ($this->IndividualModel->findbyEmail($obj->data['email'])) {
            $obj->flag == 1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if ($obj->flag == 1) {
            $this->view('Individual/V_Signup', $obj->data);
        } else {
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);


            if ($this->IndividualModel->register($obj->data)) {


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
            if ($obj->data['username']){
                $obj->validate('username', ['EMPTY', 'FORMAT']);
            }
            // print_r($obj->data);
            $obj->validate('fullname', ['EMPTY', 'FORMAT']);
            $obj->validate('nicNo', ['EMPTY']);
            $obj->validate('dob', ['EMPTY']);
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

            if ($_FILES['profile_image']['name']){
                $obj->imageUpload('Profile-image', $_FILES['profile_image'], $obj->data['profile_image'], 'profile_image');
            }
            // $this->view('test', $obj);

            $obj->imageUpload('NIC-front', $_FILES['nic_front_image'], $obj->data['nic_front_image'], 'nic_front_image');
            $obj->imageUpload('NIC-back', $_FILES['nic_back_image'], $obj->data['nic_back_image'], 'nic_back_image');
            $obj->imageUpload('Bank-passbook', $_FILES['pass_book'], $obj->data['pass_book'], 'pass_book');

                // $this->view('test', $obj);
                // print_r("d");
            if ($obj->flag == 1) {
                // print_r($_POST);
                // print_r("ST");
                // print_r($obj->data);
                $this->view('Individual/V_Super_Signup', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->IndividualModel->superRegister($obj->data)) {


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



>>>>>>> main
