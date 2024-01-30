<?php
class Admin extends controller
{
    private $AdminModel;
    public function __construct()
    {
        $this->AdminModel = $this->model('M_Admin');

    }


    public function index()
    {
        if (isset($_SESSION['userId'])) {
            $this->view('Admin/V_Dashboard');
        } else {
            redirect(URLROOT . '/Admin_Login');
        }
    }

    public function add(){
        
        $this->view('Admin/V_Add');

    }

    public function complaints(){
        $data = $this->AdminModel -> viewComplaints();
        $this->view('Admin/V_Complaints',$data);
    }

    public function donations(){
        $data = $this->AdminModel -> viewDonations();
        $this->view('Admin/V_Donations',$data);
    }

    public function contributions(){
        $data = $this->AdminModel -> viewContributions();
        $this->view('Admin/V_Contributions',$data);
    }

    public function category(){

        $this->view('Admin/V_Categories');

    }

    public function documents(){

        $this->view('Admin/V_Edit_Required_Documents');

    }
}