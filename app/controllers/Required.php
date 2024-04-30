<?php
class Required extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')

    //}


    public function index()
    {

        $this->view('Required/V_About');
    }

    public function services()
    {

        $this->view('Required/V_Services');
    }

    public function policy(){

        $this->view('Required/V_Privacy_Policy');
    }

    public function faq()
    {

        $this->view('Required/V_FAQ');
    }

    public function payments(){

        $this->view('Required/V_Payment_Options');
    }
    public function merchandise(){

        $this->view('Required/V_About_Merchandise');
    }

}
?>