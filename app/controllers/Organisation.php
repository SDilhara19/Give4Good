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
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $this->signup();
        } 
        else { 
            $data=[];
        $this->view('Organisation/V_Signup');
        }
        
    }

    public function super()
    {  
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $this->super_signup();
        } 
        else { 
            $data=[];
        $this->view('Organisation/V_Super_Signup', $data);
        }
        
    }

    
    public function signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('regno', ['EMPTY']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if ($this->OrganisationModel->findbyRegNo($obj->data['regno'])) {
            $obj->flag==1;
            $obj->data['regno_err'] = 'This Registration Number already exists';
        }

        if ($this->OrganisationModel->findbyEmail($obj->data['email'])) {
            $obj->flag==1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if($obj->flag==1){
            $this->view('Organisation/V_Signup', $obj->data);  
        }    
        else{
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);
    
            if ($this->OrganisationModel ->register($obj->data)) {
                redirect(URLROOT . '/Users');
            } else {
                die("Something went wrong");
            }
        }

    }

    public function super_signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if($obj->flag==1){
            $this->view('Users/V_OrganisationSignup', $obj->data);  
        }    
        else{    
            if ($this->OrganisationModel ->register($obj->data)) {
                redirect(URLROOT . '/Index');
            } else {
                die("Something went wrong");
            }
        }

    }

    

}






