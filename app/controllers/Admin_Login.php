<?php

require APPROOT . '/lib/validation.php';

class Admin_Login extends controller
{
  private $UserModel;
  public function __construct()
  {
    $this->UserModel = $this->model('M_user');

  }

  public function index()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->login();
    } else {
      $data = [];
      $this->view('Admin/V_Login', $data);
    }

  }



  public function login()
  {

    $obj = new Validation($_POST);
    $obj->validate('username/email', ['EMPTY']);
    $obj->validate('password', ['EMPTY']);
    
    if ((($this->UserModel->findbyUsername($obj->data['username/email'])) == false) || (($this->UserModel->findbyEmail($obj->data['username/email'])) == false)) {
      $obj->flag == 1;
      $obj->data['username/email_err'] = 'The given username or email is invalid';
    }
    

    if ($obj->flag == 1) {
      $this->view('Admin/V_Login', $obj->data);
    } else {
      $loggedInUser = $this->UserModel->login($obj->data['username/email'], $obj->data['password']);
      if ($loggedInUser) {
        
        //Create session
        $this->createUserSession($loggedInUser);
      } else {
        $obj->data['password_err'] = 'Invalid password';
        $this->view('Admin/V_Login', $obj->data);
      }
    }
  }

  public function createUserSession($user){
    $_SESSION['userId'] = $user->id;
    $_SESSION['userName'] = $user->username;
    $_SESSION['userEmail'] = $user->email;
    $_SESSION['userType'] = $user->type;
    $_SESSION['userStatus'] = $user->status;
    $_SESSION['userImage'] = $user->profile_image;
    $_SESSION['last_activity'] = time();


    redirect(URLROOT . '/Admin');

}

public function logout(){
    unset ($_SESSION['userId']);
    unset($_SESSION['userName']);
    unset($_SESSION['userEmail']);
    unset ($_SESSION['userType']);        
    unset ($_SESSION['userStatus']);
    unset($_SESSION['userImage']);

    session_destroy();
    redirect(URLROOT . '/Admin_Login');
}


}
?>
