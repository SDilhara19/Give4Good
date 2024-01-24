<?php
class Admin_Fundraisers extends controller
{
    private $AdminFundraisersModel;
    public function __construct()
    {
        $this->AdminFundraisersModel = $this->model('M_Admin_Fundraiser');
  
    }


    public function index(){

        $data = $this->AdminFundraisersModel -> getAllFundraisers(); 
        
        $this->view('Admin_Fundraisers/V_All', $data);
    }
    public function active(){
        $data = $this->AdminFundraisersModel -> viewActive();


        $this->view('Admin_Fundraisers/V_Active', $data);
    }
    public function deactive(){
        $data = $this->AdminFundraisersModel -> viewDeactivated();

        $this->view('Admin_Fundraisers/V_Deact', $data);
    }
    public function pending(){

        $data = $this->AdminFundraisersModel -> viewPending();

        $this->view('Admin_Fundraisers/V_Pending' , $data);
    }
}
?>