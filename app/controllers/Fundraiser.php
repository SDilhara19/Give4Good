<?php
class Fundraiser extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}

    public function index(){

        $this->view('Fundraisers/V_Fundraisers-all');
  }

    public function fundraiser(){

        $this->view('Fundraisers/V_Fundraiser');
  }

  public function start(){

    $this->view('Fundraisers/V_Start');
}


public function complaints(){

    $this->view('Fundraisers/V_complaint');
}
}
?>