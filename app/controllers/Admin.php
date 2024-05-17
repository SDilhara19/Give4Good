<?php
require APPROOT . '/lib/validation.php';

class Admin extends controller
{
    private $AdminModel;
    private $UserModel;
    public function __construct()
    {
        $this->AdminModel = $this->model('M_Admin');
        $this->UserModel = $this->model('M_user');
        $this->docModel = $this->model('M_Super_Fundraiser');
        $this->checkAdminLogin();

    }

    private function checkAdminLogin()
    {
        if (!isloggedIn() || (isset($_SESSION['userType']) && $_SESSION['userType'] !== 'admin')) {
            logOut();
            redirect(URLROOT . '/Admin_Login');
        }
    }


    public function index()
    {
        if (isset($_SESSION['userId'])) {

            $data['individual'] = $this->AdminModel->IndSignup();
            $data['org'] = $this->AdminModel->OrgSignup();
            $data['fundraiser'] = $this->AdminModel->Fundraiser();
            $data['merchandise'] = $this->AdminModel->Merch();
            $data['story'] = $this->AdminModel->Story();

            $this->view('Admin/V_Dashboard', $data);
        } else {
            redirect(URLROOT . '/Admin_Login');
        }
    }

    public function add()
    {
        if ($_SESSION['userLevel'] !== 2) {
            redirect(URLROOT . '/Admin_Login');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // var_dump($_POST);
                $this->signup();
            } else {
                $data = [];
                $this->view('Admin/V_Add', $data);

            }
        }






    }

    public function complaints()
    {
        $data = $this->AdminModel->viewComplaints();
        if (!($data)) {
            $data = [];
        }

        $this->view('Admin/V_Complaints', $data);
    }

    public function donations()
    {
        $data = $this->AdminModel->viewDonations();
        if (!($data)) {
            $data = [];
        }

        $this->view('Admin/V_Donations', $data);
    }

    public function contributions()
    {
        $data = $this->AdminModel->viewContributions();
        if (!($data)) {
            $data = [];
        }

        $this->view('Admin/V_Contributions', $data);
    }

    public function category()
    {
        if ($_SESSION['userLevel'] !== 2) {
            redirect(URLROOT . '/Admin_Login');
        } else {
            $this->view('Admin/V_Categories');
        }
    }

    public function documents($user, $category)
    {
        if ($_SESSION['userLevel'] !== 2) {
            redirect(URLROOT . '/Admin_Login');
        } else {
            if ($user == 'individual') {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if ($_POST['type'] == 'remove') {
                        if ($this->AdminModel->removedoc($user, $category, $_POST['remove-document'])) {
                            redirect(URLROOT . '/Admin/category');
                        }
                    } else if ($_POST['type'] == 'add') {
                        $obj = new Validation($_POST);
                        $obj->validate('doc_name', ['EMPTY']);
                        $obj->validate('doc_description', ['EMPTY']);

                        if ($obj->flag == 1) {

                            $obj->data['document'] = $this->docModel->iFindDocuments($category);
                            $obj->data['category'] = $category;
                            $obj->data['user'] = $user;
                            $this->view('Admin/V_Edit_Required_Documents_Ind', $obj->data);
                            // $this->view('test', $obj);

                        } else {

                            if ($this->AdminModel->adddoc($user, $category, $obj->data)) {

                                redirect(URLROOT . '/Admin/category');

                            } else {
                                die("Something went wrong");
                            }
                        }

                    }
                } else {
                    $data = [];
                    $data['document'] = $this->docModel->iFindDocuments($category);
                    $data['category'] = $category;
                    $data['user'] = $user;
                    $this->view('Admin/V_Edit_Required_Documents_Ind', $data, );
                }



            } else if ($user == 'organisation') {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if ($_POST['type'] == 'remove') {
                        if ($this->AdminModel->removedoc($user, $category, $_POST['remove-document'])) {
                            redirect(URLROOT . '/Admin/category');
                        }
                    } else if ($_POST['type'] == 'add') {
                        $obj = new Validation($_POST);
                        $obj->validate('doc_name', ['EMPTY']);
                        $obj->validate('doc_description', ['EMPTY']);

                        if ($obj->flag == 1) {

                            $obj->data['document'] = $this->docModel->oFindDocuments($category);
                            $obj->data['category'] = $category;
                            $obj->data['user'] = $user;
                            $this->view('Admin/V_Edit_Required_Documents_Org', $obj->data);
                            // $this->view('test', $obj);

                        } else {

                            if ($this->AdminModel->adddoc($user, $category, $obj->data)) {

                                redirect(URLROOT . '/Admin/category');

                            } else {
                                die("Something went wrong");
                            }
                        }

                    }
                } else {
                    $data = [];
                    $data['document'] = $this->docModel->oFindDocuments($category);
                    $data['category'] = $category;
                    $data['user'] = $user;
                    $this->view('Admin/V_Edit_Required_Documents_Org', $data, );
                }

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

        if ($this->UserModel->findbyUsername($obj->data['username'])) {
            $obj->flag == 1;
            $obj->data['username_err'] = 'This username already exists';
        }
        var_dump($_POST);
        if ($this->UserModel->findbyEmail($obj->data['email'])) {
            $obj->flag == 1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if ($obj->flag == 1) {
            $this->view('Admin/V_Add', $obj->data);
        } else {
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);


            if ($this->UserModel->register($obj->data)) {


                redirect(URLROOT . '/Admin_Login');
            } else {
                die("Something went wrong");
            }
        }

    }





}