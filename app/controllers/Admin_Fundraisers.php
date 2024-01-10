<?php
class Index extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){
        
        $this->view('Admin_Fundraisers/V_All');
    }
    public function index(){

        $this->view('Admin_Fundraisers/V_Active');
    }
    public function index(){

        $this->view('Admin_Fundraisers/V_Deact');
    }
    public function index(){

        $this->view('Admin_Fundraisers/V_Pending');
    }
}
?>