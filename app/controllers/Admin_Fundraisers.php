<?php
class Admin_Fundraisers extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){
        
        $this->view('Admin_Fundraisers/V_All');
    }
    public function active(){

        $this->view('Admin_Fundraisers/V_Active');
    }
    public function deactive(){

        $this->view('Admin_Fundraisers/V_Deact');
    }
    public function pending(){

        $this->view('Admin_Fundraisers/V_Pending');
    }
}
?>