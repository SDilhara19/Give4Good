<?php
class Admin_Merchandise extends controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    private $AdminMerchandiseModel;
    public function __construct()
    {
        $this->AdminMerchandiseModel = $this->model('M_Admin_Merchandise');
=======
    // private $prototypeModel;
    public function __construct()
    {
        // $this->prototypeModel = $this->model('M_model');
>>>>>>> main
=======
    private $AdminMerchandiseModel;
    public function __construct()
    {
        $this->AdminMerchandiseModel = $this->model('M_Admin_Merchandise');
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
      $data = $this->AdminMerchandiseModel->getAllMerch();
      foreach ($data as $merchandise) {
        $total_quantity = $merchandise->total_quantity;
        $sold = $merchandise->sold;
        $merchandise->current_stock = $total_quantity - $sold;
    }
    if(!($data)){
      $data=[];
    }
        $this->view('Admin_Merchandise/V_All',$data);
<<<<<<< HEAD
=======
        
        $this->view('Admin_Merchandise/V_All');
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

  }

  public function pending(){
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    $data = $this->AdminMerchandiseModel->viewPending();
    if(!($data)){
      $data=[];
    }
  foreach ($data as $merchandise) {
      $total_quantity = $merchandise->total_quantity;
      $sold = $merchandise->sold;
      $merchandise->current_stock = $total_quantity - $sold;
  }
 
    $this->view('Admin_Merchandise/V_Pending',$data);
<<<<<<< HEAD

}
public function active(){
  $data = $this->AdminMerchandiseModel->getActive();
  if(!($data)){
    $data=[];
  }
  foreach ($data as $merchandise) {
      $total_quantity = $merchandise->total_quantity;
      $sold = $merchandise->sold;
      $merchandise->current_stock = $total_quantity - $sold;
  }
 
  $this->view('Admin_Merchandise/V_Active', $data);
}
public function rejected(){
  $data = $this->AdminMerchandiseModel->viewRejected();
  if(!($data)){
    $data=[];
  }
  foreach ($data as $merchandise) {
      $total_quantity = $merchandise->total_quantity;
      $sold = $merchandise->sold;
      $merchandise->current_stock = $total_quantity - $sold;
  }
  
    $this->view('Admin_Merchandise/V_Rejected',$data);

}
// public function fundmerchs(){
//     // $data;
//     $this->view('Admin_Merchandise/V_Fundraiser_All');

// }

public function setDeactive($id){
  if($this->AdminMerchandiseModel->deactivateMerch($id)){
    echo '<script>alert("User deactivated successfully!");</script>';
  }else {
    echo '<script>alert("Error deactivating the user.");</script>';
  }
  redirect(URLROOT . '/Admin_Merchandise/index');
}

public function setActive($id){
  if($this->AdminMerchandiseModel->activateMerch($id)){
    echo '<script>alert("User deactivated successfully!");</script>';
  }else {
    echo '<script>alert("Error deactivating the user.");</script>';
  }
  redirect(URLROOT . '/Admin_Merchandise/index');

}



public function info($id){
 
  try{
    // var_dump("fdhdtjfj");
      $data['merchandise'] = $this->AdminMerchandiseModel->viewMerchOne($id);
      $data['images'] =  $this->AdminMerchandiseModel->getImage($id);
      $data['fundraiser'] = $this->AdminMerchandiseModel->getFundraiser($id);

      // Moved calculations and percentage update after fetching data from the model
      if(isset($data['merchandise']) && is_array($data['merchandise']) && count($data['merchandise']) > 0){
          $current_stock = $data['merchandise'][0]->total_quantity - $data['merchandise'][0]->sold;
          $data['merchandise'][0]->current_stock = $current_stock;

          $price = $data['merchandise'][0]->price;
          $amount_for_fund = $data['merchandise'][0]->amount_for_fund;

          if($price != 0) {
              $data['merchandise'][0]->percentage = ($amount_for_fund / $price) * 100;
          }
      }

      $this->view('Admin_Merchandise/V_Admin_Merchandise_One', $data);
  } catch (Exception $e) {
      error_log('Error in Merchandise: ' . $e->getMessage());
      echo "Error: " . $e->getMessage();
  }
 }

=======

    $this->view('Admin_Merchandise/V_Pending');
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

}
public function active(){
  $data = $this->AdminMerchandiseModel->getActive();
  if(!($data)){
    $data=[];
  }
  foreach ($data as $merchandise) {
      $total_quantity = $merchandise->total_quantity;
      $sold = $merchandise->sold;
      $merchandise->current_stock = $total_quantity - $sold;
  }
 
  $this->view('Admin_Merchandise/V_Active', $data);
}
public function rejected(){
  $data = $this->AdminMerchandiseModel->viewRejected();
  if(!($data)){
    $data=[];
  }
  foreach ($data as $merchandise) {
      $total_quantity = $merchandise->total_quantity;
      $sold = $merchandise->sold;
      $merchandise->current_stock = $total_quantity - $sold;
  }
  
    $this->view('Admin_Merchandise/V_Rejected',$data);

}
// public function fundmerchs(){
//     // $data;
//     $this->view('Admin_Merchandise/V_Fundraiser_All');

// }

public function setDeactive($id){
  if($this->AdminMerchandiseModel->deactivateMerch($id)){
    echo '<script>alert("User deactivated successfully!");</script>';
  }else {
    echo '<script>alert("Error deactivating the user.");</script>';
  }
  redirect(URLROOT . '/Admin_Merchandise/index');
}

public function setActive($id){
  if($this->AdminMerchandiseModel->activateMerch($id)){
    echo '<script>alert("User deactivated successfully!");</script>';
  }else {
    echo '<script>alert("Error deactivating the user.");</script>';
  }
  redirect(URLROOT . '/Admin_Merchandise/index');

}



<<<<<<< HEAD
}
>>>>>>> main
=======
public function info($id){
 
  try{
    // var_dump("fdhdtjfj");
      $data['merchandise'] = $this->AdminMerchandiseModel->viewMerchOne($id);
      $data['images'] =  $this->AdminMerchandiseModel->getImage($id);
      $data['fundraiser'] = $this->AdminMerchandiseModel->getFundraiser($id);

      // Moved calculations and percentage update after fetching data from the model
      if(isset($data['merchandise']) && is_array($data['merchandise']) && count($data['merchandise']) > 0){
          $current_stock = $data['merchandise'][0]->total_quantity - $data['merchandise'][0]->sold;
          $data['merchandise'][0]->current_stock = $current_stock;

          $price = $data['merchandise'][0]->price;
          $amount_for_fund = $data['merchandise'][0]->amount_for_fund;

          if($price != 0) {
              $data['merchandise'][0]->percentage = ($amount_for_fund / $price) * 100;
          }
      }

      $this->view('Admin_Merchandise/V_Admin_Merchandise_One', $data);
  } catch (Exception $e) {
      error_log('Error in Merchandise: ' . $e->getMessage());
      echo "Error: " . $e->getMessage();
  }
 }

>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
}
?>