<?php
class Admin_Individual extends controller
{
    private $AdminIndividualModel;
    public function __construct()
    {
        $this->AdminStoryModel = $this->model('M_Admin_Individual');
  
    }
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function index(){

        $this->view('Admin_Individual/V_All_Super');

  }
  
    public function active(){

        $this->view('Admin_Individual/V_Act_Super');

  }
  
    public function deactive(){

        $this->view('Admin_Individual/V_Deact_Super');

  }
  
    public function pending(){
        $data = $this->AdminIndividualModel -> viewPending();
        $this->view('Admin_Individual/V_Pending_Super',$data);

  }
  
    public function donor(){

        $this->view('Admin_Individual/V_Donor');

  }
}
?>