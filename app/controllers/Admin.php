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

    public function add()
    {

        $this->view('Admin/V_Add');

    }

    public function complaints()
    {

        $this->view('Admin/V_Complaints');

    }

    public function donations()
    {

        $this->view('Admin/V_Donations');

    }

    public function contributions()
    {

        $this->view('Admin/V_Contributions');

    }

    public function category()
    {

        $this->view('Admin/V_Categories');

    }

    public function documents()
    {

        $this->view('Admin/V_Edit_Required_Documents');

    }
}