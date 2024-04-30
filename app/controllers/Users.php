<?php

require APPROOT . '/lib/validation.php';

class Users extends controller
{
  private $UserModel;
  public function __construct()
  {
    $this->UserModel = $this->model('M_user');

  }

  public function index()
  {
    if (isloggedIn()) {
      logOut();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->login();
    } else {
      $data = [];
      $this->view('Users/V_Login', $data);
    }

  }

  public function select()
  {
    if (isloggedIn()) {
      logOut();
    }
    // $this->view('Logins/V_Signup');
    $this->view('Users/V_Select_User');
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
      $this->view('Users/V_Login', $obj->data);
    } else {
      $loggedInUser = $this->UserModel->login($obj->data['username/email'], $obj->data['password']);
      if ($loggedInUser) {
        
  
        $user_id = $loggedInUser->id;
        //Create session
        if ($this->UserModel->UpdateLoggin($user_id)) {
          $this->createUserSession($loggedInUser);

        }

      } else {
        $obj->data['password_err'] = 'Invalid password';
        $obj->data['username/email_err'] = 'The given username or email is invalid';

        $this->view('Users/V_Login', $obj->data);
      }
    }
  }

  public function createUserSession($user)
  {
    $_SESSION['userId'] = $user->id;
    $_SESSION['userName'] = $user->username;
    $_SESSION['userEmail'] = $user->email;
    $_SESSION['userType'] = $user->type;
    $_SESSION['userLevel'] = $user->user_level;
    $_SESSION['userImage'] = URLROOT . $user->profile_image;
    $_SESSION['userContact'] = $user->phone;


    redirect(URLROOT . '/Index');

  }

  public function logout()
  {
    unset($_SESSION['userId']);
    unset($_SESSION['userName']);
    unset($_SESSION['userEmail']);
    unset($_SESSION['userType']);
    unset($_SESSION['userLevel']);
    unset($_SESSION['userContact']);
    unset($_SESSION['userImage']);

    session_destroy();
    redirect(URLROOT . '/Index');
  }


}
?>