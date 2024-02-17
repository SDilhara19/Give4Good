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

  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // var_dump($_SESSION['userId']);
      $this->process_story();
    } else {
      $data = [];
      $this->view('Stories/V_Add', $data);
    }
  }

  private function process_story()
  {
    $obj = new Validation($_POST);
    $obj->validate('story_title', ['EMPTY']);
    $obj->validate('story_description', ['EMPTY']);
    // $obj->validate('story_image', ['EMPTY']);
    if ($obj->data['contact'] == 'option2') {
      $obj->validate('phone', ['EMPTY']);
      $obj->validate('email', ['EMPTY', 'EMAIL']);
    }

    if (!($_FILES['story_image']['error'] == UPLOAD_ERR_OK)) {
      $obj->data['story_image_err'] = 'Upload image';
      $obj->flag = 1;
    }

    // $obj->imageUpload('../public/Assets/Uploaded-Images/Stories/', $_FILES['story_image']['tmp_name'], $_FILES['story_image']['name'], $_SESSION['userId'], $obj->data['story_title'], $obj->data['story_image'], 'story_image');


    if ($obj->flag == 1) {
      $this->view('Stories/V_Add', $obj->data);
       
    } else {
      
      $obj->data['user_id'] = $_SESSION['userId'];
      // var_dump($obj->data);

      $uploadDir = '../public/Assets/Uploaded-Images/Stories/';
      $uploadDirName = '/public/Assets/Uploaded-Images/Stories/';

      $uploadedFile = $_FILES['story_image']['tmp_name'];
      $uploadedFileName = $_FILES['story_image']['name'];

      $fileExtension = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
      $newFileName = $obj->data['user_id'] . '_' . $obj->data['story_title'] . '.' . $fileExtension;
      $location = $uploadDir . $newFileName;
      $obj->data['story_image'] = $uploadDirName . $newFileName;

      if (move_uploaded_file($uploadedFile, $location)) {

        if ($this->StoryModel->pendingStory($obj->data)) {
          redirect(URLROOT . '/Index');
        } else {
          die("Something went wrong");
        }

      } else {
        // Handle file upload error
        if (!is_dir($uploadDir)) {
          echo "Error: The upload directory does not exist.";
        } elseif (!is_writable($uploadDir)) {
          echo "Error: The upload directory is not writable.";
        } else {
          echo "File upload failed!";
        }
      }


    }

  }
}
?>