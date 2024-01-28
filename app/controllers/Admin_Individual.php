<?php
class Admin_Individual extends controller
{
    private $AdminIndividualModel;
    public function __construct(){
        $this->AdminIndividualModel = $this->model('M_Admin_Individual');
    }

    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}

    public function index(){
        $data = $this->AdminIndividualModel -> viewAll();
        $this->view('Admin_Individual/V_All_Super',$data);
    }
  
    public function active(){
        $data = $this->AdminIndividualModel -> viewActive();
        $this->view('Admin_Individual/V_Act_Super', $data);
    }
  
    public function deactive(){
        $data = $this->AdminIndividualModel -> viewDeactive();
        $this->view('Admin_Individual/V_Deact_Super', $data);
    }
  
    public function pending(){
        $data = $this->AdminIndividualModel -> viewPending();
        $this->view('Admin_Individual/V_Pending_Super',$data);
    }
  
    public function donor(){
        $this->view('Admin_Individual/V_Donor');
    }

    public function setDeactive($id){
       if($this->AdminIndividualModel -> viewDeactivate($id)){
         echo '<script>alert(".................");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("................");</script>';
       }
       redirect(URLROOT . '/Admin_Individual/index');
    }

    public function setReactive($id){
       if($this->AdminIndividualModel -> viewReactivate($id)){
         echo '<script>alert("Story deactivated successfully!");</script>';
       } else {
         // Deactivation failed, handle the error
         echo '<script>alert("Error deactivating the story.");</script>';
       }
       redirect(URLROOT . '/Admin_Individual/index');
    }
}
?>