<?php
class Admin_Individual extends controller
{
  private $AdminIndividualModel;
  public function __construct()
  {
    $this->AdminIndividualModel = $this->model('M_Admin_Individual');
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
    $data = $this->AdminIndividualModel->viewAll();
    $this->view('Admin_Individual/V_All_Super', $data);
    //var_dump($data);
  }

  public function active()
  {
    $data = $this->AdminIndividualModel->viewActive();
<<<<<<< HEAD
<<<<<<< HEAD
    if(!($data)){
      $data=[];
    }
=======
>>>>>>> main
=======
    if(!($data)){
      $data=[];
    }
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    $this->view('Admin_Individual/V_Act_Super', $data);
    //var_dump($data);
  }

  public function deactive()
  {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    
    $data = $this->AdminIndividualModel->viewDeactive();
    if(!($data)){
      $data=[];
    }
<<<<<<< HEAD
=======
    $data = $this->AdminIndividualModel->viewDeactive();
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    $this->view('Admin_Individual/V_Deact_Super', $data);
  }

  public function pending()
  {
    $data = $this->AdminIndividualModel->viewPending();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    if(!($data)){
      $data=[];
    }

<<<<<<< HEAD
=======
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    $this->view('Admin_Individual/V_Pending_Super', $data);
  }

  public function donor()
  {
    $data = $this->AdminIndividualModel->viewIndividuals();
    $this->view('Admin_Individual/V_Donor', $data);
    //var_dump($data);
  }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
  public function setDeactive($user_id)
{
    if ($this->AdminIndividualModel->deactivateSuperIndividual($user_id)) {
        echo '<script>alert("User deactivated successfully!");</script>';
<<<<<<< HEAD
    } else {
        echo '<script>alert("Error deactivating the user.");</script>';
    }
    redirect(URLROOT . '/Admin_Individual/index');
}

public function setReactive($user_id)
{
    if ($this->AdminIndividualModel->activateSuperIndividual($user_id)) {
        echo '<script>alert("User reactivated successfully!");</script>';
    } else {
        echo '<script>alert("Error reactivating the user.");</script>';
    }
    redirect(URLROOT . '/Admin_Individual/index');
}


  public function profile($id)
    {
      // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if ($_SESSION['userType'] == 'individual') {
      $data = $this->AdminIndividualModel->viewProfile($id, $_SESSION['userLevel']);
      $this->view('Admin_Individual/V_Profile',$data);
        } else if ($_SESSION['userType'] == 'organisation') {
      $data['other'] = $this->AdminIndividualModel->getOrgDetails($id,$_SESSION['userLevel']);
      $data['executive'] = $this->AdminIndividualModel->getExecutiveDetails($id);
      $data['treasurer'] = $this->AdminIndividualModel->getTreasurerDetails($id);
      $data['secretary'] = $this->AdminIndividualModel->getSecretaryDetails($id);


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

    }
=======
  public function setDeactive($id)
  {
    if ($this->AdminIndividualModel->viewDeactivate($id)) {
      echo '<script>alert(".................");</script>';
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    } else {
        echo '<script>alert("Error deactivating the user.");</script>';
    }
    redirect(URLROOT . '/Admin_Individual/index');
}

public function setReactive($user_id)
{
    if ($this->AdminIndividualModel->activateSuperIndividual($user_id)) {
        echo '<script>alert("User reactivated successfully!");</script>';
    } else {
        echo '<script>alert("Error reactivating the user.");</script>';
    }
    redirect(URLROOT . '/Admin_Individual/index');
<<<<<<< HEAD
  }
>>>>>>> main
=======
}


  public function profile($id)
    {
      // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if ($_SESSION['userType'] == 'individual') {
      $data = $this->AdminIndividualModel->viewProfile($id, $_SESSION['userLevel']);
      $this->view('Admin_Individual/V_Profile',$data);
        } else if ($_SESSION['userType'] == 'organisation') {
      $data['other'] = $this->AdminIndividualModel->getOrgDetails($id,$_SESSION['userLevel']);
      $data['executive'] = $this->AdminIndividualModel->getExecutiveDetails($id);
      $data['treasurer'] = $this->AdminIndividualModel->getTreasurerDetails($id);
      $data['secretary'] = $this->AdminIndividualModel->getSecretaryDetails($id);


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

    }
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
}
?>