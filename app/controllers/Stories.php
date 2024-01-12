<?php

require APPROOT . '/lib/validation.php';
class Stories extends controller
{
    private $StoryModel;
    public function __construct()
    {
        $this->StoryModel = $this->model('M_Story');
  
    }


    public function index(){

        $this->view('Stories/V_Story-all');
  }

  public function add(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // var_dump($_SESSION['userId']);
        $this->process_story();
      } else {
        $data = [];
        $this->view('Stories/V_Add', $data);
      }
}

  private function process_story(){
    $obj = new Validation($_POST);
        $obj->validate('story_title', ['EMPTY', 'FORMAT']);
        $obj->validate('story_description', ['EMPTY']);
        if ($obj->data['contact'] == 'option2'){
          $obj->validate('phone', ['EMPTY']);
          $obj->validate('email', ['EMPTY', 'EMAIL']);
  }

  $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;   

  if($obj->flag==1){
    $this->view('Stories/V_Add', $obj->data);
    // var_dump($_POST);  
}  
else{ 
  // var_dump($_POST); 
  $obj->data['user_id'] = $_SESSION['userId'];
  // var_dump($obj->data); 
  if ($this->StoryModel ->pendingStory($obj->data)) {
      redirect(URLROOT . '/Index');
  } else {
      die("Something went wrong");
  }
}

}
}
?>