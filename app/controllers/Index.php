<?php
class Index extends controller
{
  private $IndexModel;
  public function __construct()
  {
    $this->IndexModel = $this->model('M_Index');
    $this->checkUserLogin();

  }

  private function checkUserLogin()
  {

    if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
      logOut();
      redirect(URLROOT . '/Users');
    }
  }

  public function index()
  {
    try {
      $data[0] = $this->IndexModel->getAllFundriasers();
      $data[1] = $this->IndexModel->getAllStories();

      foreach ($data[0] as $fundraiser) {
        $progress = $fundraiser->amount_collected;
        $total = $fundraiser->amount;
        $fundraiser->progress = ($progress / $total) * 100;

      }

      $this->view('Index/V_Index', $data);
    } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
      return false;
    }

  }
}
