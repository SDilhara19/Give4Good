<?php

require APPROOT . '/lib/validation.php';
class Organisation extends controller
{
    private $OrganisationModel;
    public function __construct()
    {
        $this->OrganisationModel = $this->model('M_User');
  
    }

    public function index()
    {  
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $this->signup();
        } 
        else { 
            $data=[];
        $this->view('Users/V_OrganisationSignup', $data);
        }
        
    }

    
    public function signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('username', ['EMPTY', 'FORMAT']);
        $obj->validate('email', ['EMPTY', 'EMAIL']);
        $obj->validate('regNo', ['EMPTY']);
        $obj->validate('password', ['EMPTY', 'PASSWORD']);
        $obj->validate('confirmpassword', ['CONFIRMPASSWORD']);

        if ($this->OrganisationModel->findbyUsername($obj->data['username'])) {
            $obj->flag==1;
            $obj->data['username_err'] = 'This username already exists';
        }

        if ($this->OrganisationModel->findbyEmail($obj->data['email'])) {
            $obj->flag==1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if($obj->flag==1){
            $this->view('Users/V_OrganisationSignup', $obj->data);  
        }    
        else{
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);
    
            if ($this->OrganisationModel ->register($obj->data)) {
                redirect(URLROOT . '/Login');
            } else {
                die("Something went wrong");
            }
        }

    }

    

}


