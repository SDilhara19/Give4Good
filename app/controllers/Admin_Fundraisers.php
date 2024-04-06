<?php
class Admin_Fundraisers extends controller
{
    private $AdminFundraisersModel;
    public function __construct(){
        $this->AdminFundraisersModel = $this->model('M_Admin_Fundraiser');

    }


    public function index(){
        $data = $this->AdminFundraisersModel->getAllFundraisers();
        $this->view('Admin_Fundraisers/V_All', $data);
    }

    public function active(){
        $data = $this->AdminFundraisersModel -> viewActive();
        $this->view('Admin_Fundraisers/V_Active');
    }

    public function deactive(){
        $data = $this->AdminFundraisersModel -> viewDeactivated();
        $this->view('Admin_Fundraisers/V_Deact');
    }

    public function pending(){
        $data = $this->AdminFundraisersModel -> viewPending();
        $this->view('Admin_Fundraisers/V_Pending');
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
         echo '<script>alert("Fundraiser activated successfully!");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("Error activating the fundraiser.");</script>';
       }
       redirect(URLROOT . '/Admin_Fundraisers/index');
    }

    public function setDeactive($id){
       if($this->AdminFundraisersModel -> deactivateFundraiser($id)){
         echo '<script>alert("Fundraiser deactivated successfully!");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("Error deactivating the fundraiser.");</script>';
       }
       redirect(URLROOT . '/Admin_Fundraisers/index');
    }
}
?>