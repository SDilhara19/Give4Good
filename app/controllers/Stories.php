<?php

require APPROOT . '/lib/validation.php';
class Stories extends controller
{
  private $StoryModel;
  public function __construct()
  {
    $this->StoryModel = $this->model('M_Story');

  }


  public function index()
  {
    $data = $this->StoryModel->getAllStories();

    $this->view('Stories/V_Story-all', $data);
  }

  // public function add()
  // {
  //   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //     // var_dump($_SESSION['userId']);
  //     $this->process_story();
  //   } else {
  //     $data = [];
  //     $this->view('Stories/V_Add', $data);
  //   }
  // }

  // private function process_story()
  // {
  //   $obj = new Validation($_POST);
  //   $obj->data['user_id'] = $_SESSION['userId'];
  //   $obj->validate('story_title', ['EMPTY']);
  //   $obj->validate('story_description', ['EMPTY']);
  //   // $obj->validate('story_image', ['EMPTY']);
  //   if ($obj->data['contact'] == 'option2') {
  //     $obj->validate('phone', ['EMPTY']);
  //     $obj->validate('email', ['EMPTY', 'EMAIL']);
  //   }
    


  //   $obj->imageUpload('Stories', $_FILES['story_image'], $obj->data['story_title'], 'story_image');
    

  //   if ($obj->flag == 1) {
  //     $this->view('Stories/V_Add', $obj->data);
       
  //   } else {
  //     if ($this->StoryModel->pendingStory($obj->data)) {
  //           redirect(URLROOT . '/Index');
  //         } else {
  //           die("Something went wrong");
  //         }
      
  //       }


  //   }

  }

