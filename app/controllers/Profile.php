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
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if ($_SESSION['userType'] == 'individual') {
      $this->view('Profiles/V_indvProfile', $data);
    } else if ($_SESSION['userType'] == 'organisation') {
      $this->view('Profiles/V_orgProfile', $data);
    }
  }
  public function edit_indv($id)
  {
    $data = $this->profileModel->editUserDetails($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $this->view('Profiles/V_editIndvProfile', $data);
  }

  public function orgProfile($id)
  {
    $data['other'] = $this->profileModel->getOrgDetails($id);
    $data['executive'] = $this->profileModel->getExecutiveDetails($id);
    $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
    $data['secretary'] = $this->profileModel->getSecretaryDetails($id);


    foreach ($data['other'][0] as $key => $value) {
      $data['other'][0]->$key = $value ?? ' ';

    }
    foreach ($data['executive'][0] as $key => $value) {
      $data['executive'][0]->$key = $value ?? ' ';
    }
    foreach ($data['secretary'][0] as $key => $value) {
      $data['secretary'][0]->$key = $value ?? ' ';
    }
    foreach ($data['treasurer'][0] as $key => $value) {
      $data['treasurer'][0]->$key = $value ?? ' ';
    }
    $this->view('Profiles/V_orgProfile', $data);
  }

  public function edit_org($id)
  {
    $data['other'] = $this->profileModel->getOrgDetails($id);
    $data['executive'] = $this->profileModel->getExecutiveDetails($id);
    $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
    $data['secretary'] = $this->profileModel->getSecretaryDetails($id);
    foreach ($data['other'][0] as $key => $value) {
      $data['other'][0]->$key = $value ?? ' ';

    }
    foreach ($data['executive'][0] as $key => $value) {
      $data['executive'][0]->$key = $value ?? ' ';
    }
    foreach ($data['secretary'][0] as $key => $value) {
      $data['secretary'][0]->$key = $value ?? ' ';
    }
    foreach ($data['treasurer'][0] as $key => $value) {
      $data['treasurer'][0]->$key = $value ?? ' ';
    }
    $this->view('Profiles/V_editOrgProfile', $data);
  }

  public function donations($id)
  {
    $data = $this->profileModel->getUserDonations($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $this->view('Profiles/V_profileDonations', $data);
    //var_dump($data);
  }

  public function fundraisers($id)
  {
    $data = $this->profileModel->getUserFundraisers($id);
    foreach ($data[0] as $key => $value) {
      $data[0]->$key = $value ?? ' ';
    }
    $this->view('Profiles/V_profileFundraisers', $data);
    //var_dump($data);
  }

  public function stories($id)
  {
    $data = $this->profileModel->getUserStories($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $this->view('Profiles/V_profileStories', $data);
    //   var_dump($data);

  }

  public function complaints($id)
  {
    $data = $this->profileModel->getUserComplaints($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $this->view('Profiles/V_profileComplaints', $data);
    //var_dump($data);
  }

  public function merchandises($id)
  {
    $data = $this->profileModel->getUserMerchandises($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $this->view('Profiles/V_profileMerchandises', $data);
    //var_dump($data);
  }

  public function subPayments($id)
  {
    $data = $this->profileModel->getSubPayments($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
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