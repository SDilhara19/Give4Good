<?php
class Admin_Stories extends controller
{
    private $AdminStoryModel;
    public function __construct(){
        $this->AdminStoryModel = $this->model('M_Admin_Story');
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
        $data = $this->AdminStoryModel -> getAllStories(); 
        $this->view('Admin_Stories/V_all', $data);
    }
    
    public function active(){
<<<<<<< HEAD

        $data = $this->AdminStoryModel -> getActiveStories();
        if(!($data)){
          $data=[];
        }
=======
        $data = $this->AdminStoryModel -> getActiveStories();
>>>>>>> main
        $this->view('Admin_Stories/V_Active', $data);
    }

    public function reject(){
       $data = $this->AdminStoryModel -> viewRejected();
<<<<<<< HEAD
       if(!($data)){
        $data=[];
      }
=======
>>>>>>> main
       $this->view('Admin_Stories/V_Rejected', $data);
    }

    public function pending(){
       $data = $this->AdminStoryModel -> viewPending();
<<<<<<< HEAD
       if(!($data)){
        $data=[];
      }
=======
>>>>>>> main
       $this->view('Admin_Stories/V_Pending',$data);
    }

    public function setDeactive($id){
       if($this->AdminStoryModel -> deactivateStory($id)){
         echo '<script>alert("Story deactivated successfully!");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("Error deactivating the story.");</script>';
       }
       redirect(URLROOT . '/Admin_Stories/index');
    }

    public function setActive($id){
       if($this->AdminStoryModel -> activateStory($id)){
         echo '<script>alert("Story activated successfully!");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("Error activating the story.");</script>';
       }
       redirect(URLROOT . '/Admin_Stories/index');
    }
}
?>