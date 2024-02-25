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

      foreach ($data as $fundraiser){
        $progress = $fundraiser->amount_collected;
        $total = $fundraiser->amount;
        $fundraiser->progress = ($progress/$total)*100;

      }
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

          $progress = $data['fundraiser'][0]->amount_collected;
          $total = $data['fundraiser'][0]->amount;
          $data['fundraiser'][0]->progress = ($progress/$total)*100;

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
