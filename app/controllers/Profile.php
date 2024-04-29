<?php
require APPROOT . '/lib/validation.php';

class Profile extends controller
{
  private $profileModel;
  public function __construct()
  {
    $this->profileModel = $this->model('M_Profile');

  }

  public function index($id)
  {
    if ($_SESSION['userType'] == 'individual') {
      $data = $this->profileModel->getUserDetails($id, $_SESSION['userLevel']);
      $this->view('Profiles/V_indvProfile', $data);
    } else if ($_SESSION['userType'] == 'organisation') {
      $data['other'] = $this->profileModel->getOrgDetails($id, $_SESSION['userLevel']);
      $data['executive'] = $this->profileModel->getExecutiveDetails($id);
      $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
      $data['secretary'] = $this->profileModel->getSecretaryDetails($id);

      $this->view('Profiles/V_orgProfile', $data);
    }
  }
  public function edit_indv($id)
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->editData();
      // $this->view('test');

    } else {
      $data = $this->profileModel->editUserDetails($id, $_SESSION['userLevel']);

      $this->view('Profiles/V_editIndvProfile', $data);
    }
  }

  public function editData()
  {
    $obj = new Validation($_POST);
    $obj->data['user_id'] = $_SESSION['userId'];

    $obj->imageUpload('Profile-image', $_FILES['profile_image'], '', 'profile_image');
    $obj->imageUpload('Bank-passbook', $_FILES['pbook_img'], '', 'pbook_img');

    // $this->view('test', $obj);
    if ($this->profileModel->updateData($obj->data)) {


      redirect(URLROOT . 'Profile/index');
    } else {
      print_r($obj->data);
      // die("Something went wrong");
    }

  }

  public function edit_org($id)
  {
    $data['other'] = $this->profileModel->getOrgDetails($id, $_SESSION['userLevel']);
    $data['executive'] = $this->profileModel->getExecutiveDetails($id);
    $data['treasurer'] = $this->profileModel->getTreasurerDetails($id);
    $data['secretary'] = $this->profileModel->getSecretaryDetails($id);
   
    $this->view('Profiles/V_editOrgProfile', $data);
  }

  public function donations($id)
  {
    $data = $this->profileModel->getUserDonations($id);
  
    if (!($data)) {
      $data = [];
    }
    $this->view('Profiles/V_profileDonations', $data);
    //var_dump($data);
  }

  public function fundraisers($id)
  {
    $data = $this->profileModel->getUserFundraisers($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if (!($data)) {
      $data = [];
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
    if (!($data)) {
      $data = [];
    }
    $this->view('Profiles/V_profileStories', $data);
    //   var_dump($data);

  }

  public function complaints($id)
  {
    $data = $this->profileModel->getUserComplaints($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if (!($data)) {
      $data = [];
    }
    $this->view('Profiles/V_profileComplaints', $data);
    //var_dump($data);
  }

  public function merchandises($id)
  {
    $data = $this->profileModel->getUserMerchandises($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if (!($data)) {
      $data = [];
    }
    $this->view('Profiles/V_profileMerchandises', $data);
    //var_dump($data);
  }

  public function subPayments($id)
  {
    $data = $this->profileModel->getSubPayments($id);
    // foreach ($data[0] as $key => $value) {
    //   $data[0]->$key = $value ?? ' ';
    // }
    if (!($data)) {
      $data = [];
    }
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

  public function setEndFundraiser($id){
    print_r($id);
       if($this->profileModel -> endFundraiser($id)){
         echo '<script>alert("Fundraiser ended!");</script>';
         redirect(URLROOT . '/Profile/V_profileFundraisers');
       } else {

         // Deactivation failed, handle the error
         echo '<script>alert("Error deactivating the fundraiser.");</script>';
       }
      
    }

    public function setDeactiveFundraiser($id){
    print_r($id);
       if($this->profileModel -> deactivateFundraiser($id)){
         echo '<script>alert("Fundraiser deactivated!");</script>';
         redirect(URLROOT . '/Profile/V_profileFundraisers');
       } else {

         // Deactivation failed, handle the error
         echo '<script>alert("Error deactivating the fundraiser.");</script>';
       }
      
    }




// public function fundraiserSearch(){
//         // echo 'dieeee';

//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//             $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

//             $search = trim($_POST['search']);

//         $searchResult = $this->profileModel->searchForFundraiser($search);
        
//         $data = [
//             'search' =>$searchResult,
//             'term' => $search
//         ];
//         // print_r($data);

//         $this->view('pages/searchResults', $data);
//     }

//     }

   
}
?>