<?php
class Admin_Stories extends controller
{
    private $AdminStoryModel;
    public function __construct()
    {
        $this->AdminStoryModel = $this->model('M_Admin_Story');
  
    }

    public function index(){
        $data = $this->AdminStoryModel -> getAllStories(); 
  
          $this->view('Admin_Stories/V_all', $data);
    }
    

  public function active(){

    $this->view('Admin_Stories/V_Active');
}

public function reject(){

    $this->view('Admin_Stories/V_Rejected');
}

public function pending(){

    $this->view('Admin_Stories/V_Pending');
}
}
?>