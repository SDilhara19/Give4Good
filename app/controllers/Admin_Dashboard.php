<?php
class Admin_Dashboard extends controller
{
    private $AdminDashboardModel;
    public function __construct()
    {
        $this->AdminDashboardModel = $this->model('M_Admin_Dashboard');
  
    }

    public function individual(){
        $data = $this->AdminDashboardModel->IndSignup();
        print_r($data);
        // $this->view('Admin/V_Dashboard', $data);
    }
   
  
}
