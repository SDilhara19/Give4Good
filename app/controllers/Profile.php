<?php
class Profile extends controller
{
     private $profileModel;
     public function __construct()
     {
        $this->profileModel = $this->model('M_Profile');
  
    }
  
  public function index($id){
   $data = $this->profileModel->getUserDetails($id);
    $this->view('Profiles/V_indvProfile', $data);
   //var_dump($this->profileModel->getUserDetails());
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