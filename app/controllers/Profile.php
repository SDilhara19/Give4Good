<?php
class Profile extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}
  
  public function index(){
    $this->view('Profiles/V_indvProfile');
  }
   
  public function edit_indv(){
    $this->view('Profiles/V_editIndvProfile');
  }

  public function orgProfile(){
     $this->view('Profiles/V_orgProfile');
  }

  public function edit_org(){
    $this->view('Profiles/V_editOrgProfile');
 }

 public function donations(){
    $this->view('Profiles/V_profileDonations');
 }

 public function fundraisers(){
    $this->view('Profiles/V_profileFundraisers');
 }

 public function stories(){
    $this->view('Profiles/V_profileStories');
 }

 public function complaigns(){
    $this->view('Profiles/V_profileComplaigns');
 }
 
 public function notifications(){
    $this->view('Profiles/V_profileNotifications');
  }

  public function change_pwd(){
    $this->view('Profiles/V_ChangePassword');
  }

}
?>