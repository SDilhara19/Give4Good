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

      foreach ($data as $fundraiser){
        $progress = $fundraiser->amount_collected;
        $total = $fundraiser->amount;
        $fundraiser->progress = ($progress/$total)*100;

      }
      
      $this->view('Index/V_Index', $data);
  }
}
