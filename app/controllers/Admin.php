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

    }


    public function index()
    {
        if (isset($_SESSION['userId'])) {
            $this->view('Admin/V_Dashboard');
        } else {
            redirect(URLROOT . '/Admin_Login');
        }
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST);
            $this->signup();
          } else {
            $data = [];
        $this->view('Admin/V_Add', $data);

          }

    }

    public function complaints(){
        $data = $this->AdminModel -> viewComplaints();
        $this->view('Admin/V_Complaints',$data);
    }

    public function donations(){
        $data = $this->AdminModel -> viewDonations();
        $this->view('Admin/V_Donations',$data);
    }

    public function contributions(){
        $data = $this->AdminModel -> viewContributions();
        $this->view('Admin/V_Contributions',$data);
    }

    public function category(){

        $this->view('Admin/V_Categories');

    }

    public function documents(){

        $this->view('Admin/V_Edit_Required_Documents');

    }


    public function signup()
    {
     

        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if ($this->UserModel->findbyUsername($obj->data['username'])) {
            $obj->flag==1;
            $obj->data['username_err'] = 'This username already exists';
        }
            var_dump($_POST);
        if ($this->UserModel->findbyEmail($obj->data['email'])) {
            $obj->flag==1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if($obj->flag==1){
            $this->view('Admin/V_Add', $obj->data);  
        }    
        else{
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);


            if ($this->UserModel ->register($obj->data)) {
   

                redirect(URLROOT . '/Admin');
            } else {
                die("Something went wrong");
            }
        }

    }

   
    


}