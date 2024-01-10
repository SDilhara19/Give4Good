<?php
class Admin_Organisation extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){

        $this->view('Admin_Organisation/V_All_Super');

  }

  public function pending(){

    $this->view('Admin_Organisation/V_Pending_Super');

}
public function active(){

    $this->view('Admin_Organisation/V_Act_Super');

}
public function deactive(){

    $this->view('Admin_Organisation/V_Deact_Super');

}
public function donor(){

    $this->view('Admin_Organisation/V_Donor');

}
}
?>