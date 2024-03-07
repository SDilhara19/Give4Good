<?php
class Admin_Merchandise extends controller
{
    // private $prototypeModel;
    public function __construct()
    {
        // $this->prototypeModel = $this->model('M_model');
        $this->checkAdminLogin();
  
    }


    private function checkAdminLogin()
  {
    if (!isloggedIn() || (isset($_SESSION['userType']) && $_SESSION['userType'] !== 'admin')) {
        logOut();
      redirect(URLROOT . '/Admin_Login');
    }
  }
    public function index(){
        
        $this->view('Admin_Merchandise/V_All');

  }

  public function pending(){

    $this->view('Admin_Merchandise/V_Pending');

}
public function active(){

    $this->view('Admin_Merchandise/V_Active');

}
public function rejected(){

    $this->view('Admin_Merchandise/V_Rejected');

}
public function fundmerchs(){
    // $data;
    $this->view('Admin_Merchandise/V_Fundraiser_All');

}

public function info(){

    $this->view('Admin_Merchandise/V_Admin_Merchandise_One');

}
}
?>