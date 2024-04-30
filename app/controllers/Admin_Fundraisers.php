<?php
class Admin_Fundraisers extends controller
{
    private $AdminFundraisersModel;
    public function __construct(){
        $this->AdminFundraisersModel = $this->model('M_Admin_Fundraiser');

        $this->checkAdminLogin();
  
    }

    private function checkAdminLogin()
  {
    if (!isloggedIn() || (isset($_SESSION['userType']) && $_SESSION['userType'] !== 'admin')) {
        logOut();
        redirect(URLROOT . '/Admin_Login');
    }
  }

    public function index(){
        $data = $this->AdminFundraisersModel->getAllFundraisers();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
    
=======
>>>>>>> main
        $this->view('Admin_Fundraisers/V_All', $data);
    }

    public function active(){
        $data = $this->AdminFundraisersModel -> viewActive();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
    
=======
>>>>>>> main
        $this->view('Admin_Fundraisers/V_Active', $data);
    }

    public function deactive(){
        $data = $this->AdminFundraisersModel -> viewDeactivated();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
    
=======

>>>>>>> main
        $this->view('Admin_Fundraisers/V_Deact',$data);
    }

    public function pending(){
        $data = $this->AdminFundraisersModel -> viewPending();
<<<<<<< HEAD
        if(!($data)){
          $data=[];
        }
    
        $this->view('Admin_Fundraisers/V_Pending', $data);
    }

    public function setDeactive($fundraiser_id){
      if($this->AdminFundraisersModel->deactivateFundraiser($fundraiser_id)){
          echo '<script>alert("Story deactivated successfully!");</script>';
      } else {
          // Deactivation failed, handle the error
          echo '<script>alert("Error deactivating the Fundraiser.");</script>';
      }
      redirect(URLROOT . '/Admin_Fundraisers/index'); // corrected redirect URL
  }
  

      public function setActive($fundraiser_id){
         if($this->AdminFundraisersModel -> activateFundraiser($fundraiser_id)){
=======
        $this->view('Admin_Fundraisers/V_Pending', $data);
    }

       public function setDeactive($id){
         if($this->AdminFundraisersModel -> deactivateFundraiser($id)){
           echo '<script>alert("Story deactivated successfully!");</script>';
         } else {
           // Deactivation failed, handle the error
           echo '<script>alert("Error deactivating the Fundraiser.");</script>';
         }
         redirect(URLROOT . '/Admin_Fundraiser/index');
      }

      public function setActive($id){
         if($this->AdminFundraisersModel -> activateFundraiser($id)){
>>>>>>> main
           echo '<script>alert("Story activated successfully!");</script>';
         } else {
           // Deactivation failed, handle the error
           echo '<script>alert("Error activating the Fundraiser.");</script>';
         }
<<<<<<< HEAD
         redirect(URLROOT . '/Admin_Fundraisers/index');
      }
   // public function merchandise(){

        // $data = $this->AdminFundraisersModel -> viewMerch();

       // $this->view('Admin_Fundraisers/V_Admin_Merchandise');
   // }

   public function fundraiser_one($id){
    try {
      // var_dump("jj");
      $data['fundraiser'] = $this->AdminFundraisersModel->viewFundOne($id);
      $data['images'] = $this->AdminFundraisersModel->getImages($id);
      $data['image'] = $this->AdminFundraisersModel->getDocImages($id);
      $data['merchandise'] = $this->AdminFundraisersModel->getMerchandise($id);
      $data['materials'] = $this->AdminFundraisersModel->getMaterials($id);
      $data['locations'] = $this->AdminFundraisersModel->getMaterialLocation($id);
      $data['mImage'] = $this->AdminFundraisersModel->getMaterialImages($id);
      $progress = $data['fundraiser'][0]->amount_collected;
      $total = $data['fundraiser'][0]->amount;
      $data['fundraiser'][0]->progress = ($progress / $total) * 100;
      

    // var_dump($data);
 
    $this->view('Admin_Fundraisers/V_Fundraiser_One', $data);
    

  } catch (Exception $e) {
      error_log('Error in fundraiser: ' . $e->getMessage());
      echo "Error: " . $e->getMessage();
  }
  }


  public function fundraiser_doc($id){
    try {
        $data['fundraiser'] = $this->AdminFundraisersModel->getFundOne($id);
        $data['image'] = $this->AdminFundraisersModel->getDocImages($id);

        $this->view('Admin_Fundraisers/V_Fundraiser-document', $data);
    } catch (Exception $e) {
        error_log('Error in fundraiser_doc: ' . $e->getMessage());
        echo "Error: " . $e->getMessage();
    }
}


}

?>
=======
         redirect(URLROOT . '/Admin_Fundraiser/index');
      }
    public function merchandise(){

        // $data = $this->AdminFundraisersModel -> viewMerch();

        $this->view('Admin_Fundraisers/V_Admin_Merchandise');
    }

    public function fundraiser_one(){

        //  $data = $this->AdminFundraisersModel -> viewFundOne();

        $this->view('Admin_Fundraisers/V_Fundraiser_One');
    }

    public function fundraiser_doc(){

        //  $data = $this->AdminFundraisersModel -> viewFundDoc();

        $this->view('Admin_Fundraisers/V_Fundraiser-document');
    }

}
>>>>>>> main
