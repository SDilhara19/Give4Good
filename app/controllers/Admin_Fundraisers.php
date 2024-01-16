<?php
class Admin_Fundraisers extends controller
{
    private $AdminFundraisersModel;
    public function __construct()
    {
        $this->AdminStoryModel = $this->model('M_Admin_Fundraiser');
  
    }


    public function index(){

        $data = $this->AdminStoryModel -> getAllFundraisers(); 
        
        $this->view('Admin_Fundraisers/V_All', $data);
    }
    public function active(){
        $data = $this->AdminStoryModel -> viewActive();


        $this->view('Admin_Fundraisers/V_Active', $data);
    }
    public function deactive(){
        $data = $this->AdminStoryModel -> viewDeactivated();

        $this->view('Admin_Fundraisers/V_Deact', $data);
    }
    public function pending(){

        $data = $this->AdminStoryModel -> viewPending();

        $this->view('Admin_Fundraisers/V_Pending' , $data);
    }
}
?>