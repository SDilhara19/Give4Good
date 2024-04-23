<?php
class Profile extends controller
{
  private $profileModel;
  public function __construct()
  {
    $this->profileModel = $this->model('M_Profile');

  }

  public function index($id)
  {
    $data = $this->profileModel->getUserDetails($id);
    $this->view('Profiles/V_indvProfile', $data);
    //var_dump($this->profileModel->getUserDetails());
  } 

  public function edit_indv($id)
  {
    $data = $this->profileModel->editUserDetails($id);
    $this->view('Profiles/V_editIndvProfile', $data);
  }

  public function orgProfile($id)
  {
     $data['other'] = $this->profileModel->getOrgDetails($id);
    $data['executive'] = $this->profileModel->getExecutiveDetails($id);
    $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
    $data['secretary'] = $this->profileModel->getSecretaryDetails($id);
    $this->view('Profiles/V_orgProfile', $data);
  }

  public function edit_org($id)
  {
    $data['other'] = $this->profileModel->getOrgDetails($id);
    $data['executive'] = $this->profileModel->getExecutiveDetails($id);
    $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
    $data['secretary'] = $this->profileModel->getSecretaryDetails($id);
    $this->view('Profiles/V_editOrgProfile', $data);
  }

  public function donations($id)
  {
    $data = $this->profileModel->getUserDonations($id);
    $this->view('Profiles/V_profileDonations', $data);
    //var_dump($data);
  }

  public function fundraisers($id)
  {
    $data = $this->profileModel->getUserFundraisers($id);
    $this->view('Profiles/V_profileFundraisers', $data);
    //var_dump($data);
  }

  public function stories($id)
  {
    $data = $this->profileModel->getUserStories($id);
    $this->view('Profiles/V_profileStories', $data);
    //   var_dump($data);

  }

  public function complaints($id)
  {
    $data = $this->profileModel->getUserComplaints($id);
    $this->view('Profiles/V_profileComplaints', $data);
    //var_dump($data);
  }

  public function merchandises($id)
  {
    $data = $this->profileModel->getUserMerchandises($id);
    $this->view('Profiles/V_profileMerchandises', $data);
    //var_dump($data);
  }

  public function subPayments($id)
  {
    $data = $this->profileModel->getSubPayments($id);
    $this->view('Profiles/V_profileSubPayments', $data);
    //var_dump($data);
  }


  public function notifications()
  {
    $this->view('Profiles/V_profileNotifications');
  }

  public function change_pwd()
  {
    $this->view('Profiles/V_ChangePassword');
  }

}
?>