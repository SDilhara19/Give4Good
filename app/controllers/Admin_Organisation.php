<?php
class Admin_Organisation extends controller
{
    private $AdminOrganisationModel;
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
        $data = $this->AdminOrganisationModel->viewAll();
        $this->view('Admin_Organisation/V_All_Super',$data);

    }

    public function pending()
    {
        $data = $this->AdminOrganisationModel->viewPending();
        $this->view('Admin_Organisation/V_Pending_Super', $data);

    }
    public function active()
    {
        $data = $this->AdminOrganisationModel->viewActive();
        $this->view('Admin_Organisation/V_Act_Super', $data);

    }
    public function deactive()
    {
        $data = $this->AdminOrganisationModel->viewDeactive();
        $this->view('Admin_Organisation/V_Deact_Super', $data);

    }
    public function donor()
    {
        $data = $this->AdminOrganisationModel->viewOrganisations();
        $this->view('Admin_Organisation/V_Donor', $data);
        //var_dump($data);


    }
}
?>