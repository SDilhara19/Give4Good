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
    $data = $this->AdminStoryModel -> getActiveStories();

    $this->view('Admin_Stories/V_Active', $data);
}

public function reject(){

    $data = $this->AdminStoryModel -> viewRejected();

    $this->view('Admin_Stories/V_Rejected', $data);
}

public function pending(){

    $data = $this->AdminStoryModel -> viewPending();

    $this->view('Admin_Stories/V_Pending',$data);
}
}
?>