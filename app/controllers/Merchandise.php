<?php
class Merchandise extends controller
{
  private $MerchandiseModel;
  public function __construct()
  {
    $this->MerchandiseModel = $this->model('M_Merchandise');
    $this->checkUserLogin();

  }

  private function checkUserLogin()
  {

    if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
      logOut();
    }
  }

  public function buy($id)
  {
    try {
      $data = $this->MerchandiseModel->getAMerchandise($id);

// print_r($merch[0]->product_name);
      $this->view('Merchandise/V_Buy', $data);
    } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
      return false;
    }

  }
}
