<?php
class Stories extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){

        $this->view('Stories/V_Story-all');
  }

  public function add(){

    $this->view('Stories/V_Add');
}
}
?>