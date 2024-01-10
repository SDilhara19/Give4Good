<?php
class Admin_Stories extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){

        $this->view('Admin_Stories/V_All');
  }

  public function active(){

    $this->view('Admin_Stories/V_Active');
}

public function reject(){

    $this->view('Admin_Stories/V_Rejected');
}

public function pending(){

    $this->view('Admin_Stories/V_Pending');
}
}
?>