<?php
class Admin_Organisation extends controller
{
    private $AdminOrganisationModel;
    //private $prototypeModel;
    public function __construct()
    {
        $this->AdminOrganisationModel = $this->model('M_Admin_Organisations');
        $this->checkAdminLogin();

    }

    private function checkAdminLogin()
    {
        if (!isloggedIn() || (isset($_SESSION['userType']) && $_SESSION['userType'] !== 'admin')) {
            logOut();
            redirect(URLROOT . '/Admin_Login');
        }
    }

    public function index()
    {

        $this->view('Admin_Organisation/V_All_Super');

    }

    public function pending()
    {

        $this->view('Admin_Organisation/V_Pending_Super');

    }
    public function active()
    {

        $this->view('Admin_Organisation/V_Act_Super');

    }
    public function deactive()
    {

        $this->view('Admin_Organisation/V_Deact_Super');

    }
    public function donor()
    {
        $data = $this->AdminOrganisationModel->viewOrganisations();
        //$this->view('Admin_Organisation/V_Donor', $data);
        var_dump($data);


    }
}
?>