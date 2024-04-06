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
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $this->signup();
            //var_dump($_POST);
        } 
        else { 
            $data=[];
        $this->view('Individual/V_Signup', $data);
        }
        
    }

  
    public function super()
    {  
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $this->super_signup();
        } 
        else { 
            $data=[];
            // var_dump($_SESSION['userId']);
        $this->view('Individual/V_Super_Signup', $data);
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
            $obj->flag==1;
            $obj->data['username_err'] = 'This username already exists';
        }

        if ($this->IndividualModel->findbyEmail($obj->data['email'])) {
            $obj->flag==1;
            $obj->data['email_err'] = 'This email already registered';
        }

        if($obj->flag==1){
            $this->view('Individual/V_Signup', $obj->data);  
        }    
        else{
            $obj->data['password'] = password_hash($obj->data['password'], PASSWORD_DEFAULT);


            if ($this->IndividualModel ->register($obj->data)) {
   

                redirect(URLROOT . '/Users');
            } else {
                die("Something went wrong");
            }
        }

    }

    public function super_signup()
    {
        $obj = new Validation($_POST);
        $obj->validate('fullname', ['EMPTY', 'FORMAT']);
        $obj->validate('nicNo', ['EMPTY']);
        $obj->validate('dob', ['EMPTY']);

        if($obj->flag==1){
            $this->view('Individual/V_Super_Signup', $obj->data);  
        }    
        else{    
            echo($_POST);

    }
}

    

}



