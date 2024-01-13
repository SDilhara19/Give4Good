<?php
class Admin extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){

        $this->view('Admin/V_Dashboard');

  }

  public function add(){

    $this->view('Admin/V_Add');

}

public function complaints(){

    $this->view('Admin/V_Complaints');

}

public function donations(){

    $this->view('Admin/V_Donations');

}

public function contributions(){

    $this->view('Admin/V_Contributions');

}
}