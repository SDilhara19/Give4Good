<?php
class Admin_Fundraisers extends controller
{
    private $AdminFundraisersModel;
    public function __construct()
    {
        $this->AdminFundraisersModel = $this->model('M_Admin_Fundraiser');
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

        $data = $this->AdminFundraisersModel -> getAllFundraisers(); 
        
        $this->view('Admin_Fundraisers/V_All', $data);
    }

    public function active(){
        // $data = $this->AdminFundraisersModel -> viewActive();


        $this->view('Admin_Fundraisers/V_Active');
    }

    public function deactive(){
        // $data = $this->AdminFundraisersModel -> viewDeactivated();

        $this->view('Admin_Fundraisers/V_Deact');
    }

    public function pending(){

        $data = $this->AdminFundraisersModel -> viewPending();

        $this->view('Admin_Fundraisers/V_Pending', $data);
    }

    public function merchandise(){

       // $data = $this->AdminFundraisersModel -> viewMerch();

        $this->view('Admin_Fundraisers/V_Admin_Merchandise');
    }

    public function fundraiser_one(){

      //  $data = $this->AdminFundraisersModel -> viewFundOne();

        $this->view('Admin_Fundraisers/V_Fundraiser_One');
    }

    public function fundraiser_doc(){

      //  $data = $this->AdminFundraisersModel -> viewFundDoc();

        $this->view('Admin_Fundraisers/V_Fundraiser-document');
    }



public function setActive($id){

    if($this->AdminFundraisersModel -> activateFundraiser($id)){
      echo '<script>alert("Story activated successfully!");</script>';
    } else {
      // Deactivation failed, handle the error
      echo '<script>alert("Error activating the story.");</script>';
     
    }
    // var_dump($id);
    redirect(URLROOT . '/Admin_Fundraisers/index');
 }
}