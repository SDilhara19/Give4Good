<?php
class Index extends controller
{
    private $IndexModel;
    public function __construct()
    {
        $this->IndexModel = $this->model('M_Index');
  
    }


    public function index(){
      $data= $this->IndexModel->getAllFundriasers();
      $this->view('Index/V_Index', $data);
  }
}
