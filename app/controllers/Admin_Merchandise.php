<?php
class Admin_Merchandise extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){
        
        $this->view('Admin_Merchandise/V_All');

  }

  public function pending(){

    $this->view('Admin_Merchandise/V_Pending');

}
public function active(){

    $this->view('Admin_Merchandise/V_Active');

}
public function deactive(){

    $this->view('Admin_Merchandise/V_Rejected');

}
public function fundmerchs($id){
    // $data;
    $this->view('Admin_Merchandise/V_Fundraiser_All');

}

public function info(){

    $this->view('Admin_Merchandise/V_Admin_Merchandise_One');

}
}
?>