<?php
class Fundraiser extends controller
{
    private $fundraiserModel;
    public function __construct()
    {
        $this->fundraiserModel = $this->model('M_Fundraiser');
  
    }

    public function index(){
      $data = $this->fundraiserModel->getAllFundriasers();
        $this->view('Fundraisers/V_Fundraisers-all', $data);
  }

  public function fundraiser($id)
  {
      try {
          $data['fundraiser'] = $this->fundraiserModel->getAFundraiser($id);
          $data['images'] = $this->fundraiserModel->getImages($id);
          $data['merchandise'] = $this->fundraiserModel->getMerchandise($id);
          $data['materials'] = $this->fundraiserModel->getMaterials($id);
          $data['locations'] = $this->fundraiserModel->getMaterialLocation($id);

          // var_dump($data);
          $this->view('Fundraisers/V_Fundraiser', $data);
      } catch (Exception $e) {
          error_log('Error in fundraiser: ' . $e->getMessage());
          echo "Error: " . $e->getMessage();
      }
  }
  
  public function start(){

    $this->view('Fundraisers/V_Start');
}
}
