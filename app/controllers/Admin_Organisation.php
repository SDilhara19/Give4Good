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
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
=======
>>>>>>> main
        $this->view('Admin_Organisation/V_All_Super',$data);

    }

    public function pending()
    {
        $data = $this->AdminOrganisationModel->viewPending();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
=======
>>>>>>> main
        $this->view('Admin_Organisation/V_Pending_Super', $data);

    }
    public function active()
    {
        $data = $this->AdminOrganisationModel->viewActive();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
=======
>>>>>>> main
        $this->view('Admin_Organisation/V_Act_Super', $data);

    }
    public function deactive()
    {
        $data = $this->AdminOrganisationModel->viewDeactive();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
=======
>>>>>>> main
        $this->view('Admin_Organisation/V_Deact_Super', $data);

    }
    public function donor()
    {
        $data = $this->AdminOrganisationModel->viewOrganisations();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
=======
>>>>>>> main
        $this->view('Admin_Organisation/V_Donor', $data);
        //var_dump($data);


    }

<<<<<<< HEAD

    public function profile()
    {
        $data = $this->AdminProfileModel->viewProfile();
        $this->view('Admin_Organisation/V_Profile',$data);

    }


    public function setDeactive($user_id)
    {
      if ($this->AdminOrganisationModel->deactivateSuperOrganisation($user_id)) {
=======
    public function setDeactive($id)
    {
      if ($this->AdminOrganisationModel->viewDeactivate($id)) {
>>>>>>> main
        echo '<script>alert(".................");</script>';
      } else {
        // Deactivation failed, handle the error
        echo '<script>alert("................");</script>';
      }
<<<<<<< HEAD
      redirect(URLROOT . '/Admin_Organisation/index');
    }
  
    public function setReactive($user_id)
    {
      if ($this->AdminOrganisationModel->activateSuperOrganisation($user_id)) {
=======
      redirect(URLROOT . '/Admin_Individual/index');
    }
  
    public function setReactive($id)
    {
      if ($this->AdminOrganisationModel->viewReactivate($id)) {
>>>>>>> main
        echo '<script>alert("Story deactivated successfully!");</script>';
      } else {
        // Deactivation failed, handle the error
        echo '<script>alert("Error deactivating the story.");</script>';
      }
<<<<<<< HEAD
      redirect(URLROOT . '/Admin_Organisation/index');
=======
      redirect(URLROOT . '/Admin_Individual/index');
>>>>>>> main
    }
}
?>