<?php
class Admin_Profile extends controller
{
  private $AdminProfileModel;

  public function __construct()
  {
    $this->AdminProfileModel = $this->model('M_Admin_Profile');
    $this->checkAdminLogin();

  }

  private function checkAdminLogin()
  {
    if (!isloggedIn() || (isset($_SESSION['userType']) && $_SESSION['userType'] !== 'admin')) {
      logOut();
      redirect(URLROOT . '/Admin_Login');
    }
  }

  public function profile($id)
  {
    // var_dump("lkkl");


    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    $users = $this->AdminProfileModel->Users($id);
    // var_dump($users);
    if ($users[0]->type == 'individual') {
      // var_dump("lkkl");
      $data = $this->AdminProfileModel->viewProfileInd($id, $users[0]->user_level);
      // var_dump($data[0]->user_level);
      $this->view('Admin_Individual/V_Profile', $data);
    } else if ($users[0]->type == 'organisation') {
      $data['other'] = $this->AdminProfileModel->viewProfileOrg($id, $users[0]->user_level);
      $data['executive'] = $this->AdminProfileModel->getExecutiveDetails($id);
      $data['treasurer'] = $this->AdminProfileModel->getTreasurerDetails($id);
      $data['secretary'] = $this->AdminProfileModel->getSecretaryDetails($id);


      // foreach ($data['other'][0] as $key => $value) {
      //   $data['other'][0]->$key = $value ?? ' ';

      // }
      // foreach ($data['executive'][0] as $key => $value) {
      //   $data['executive'][0]->$key = $value ?? ' ';
      // }
      // foreach ($data['secretary'][0] as $key => $value) {
      //   $data['secretary'][0]->$key = $value ?? ' ';
      // }
      // foreach ($data['treasurer'][0] as $key => $value) {
      //   $data['treasurer'][0]->$key = $value ?? ' ';
      // }
      $this->view('Admin_Organisation/V_Profile', $data);
    }

  }
}
?>