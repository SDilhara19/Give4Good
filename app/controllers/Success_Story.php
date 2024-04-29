<?php

class Success_Story extends Controller {
    public function __construct() {
        // Load the SuccessStoryModel
        $this->SuccessStoryModel = $this->model('M_Success_Story');
    }

    // Display form to add success story
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_SESSION['userId']);
            $this->store();
          } else{
            $data = [];
        $this->view('Success_Story/V_Add_Success_Story', $data);
          }
    }

    // Process adding a success story
    public function store() {
        // Check if POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate inputs
            $data = [
                'fundraiser_id' => $_POST['fundraiser_id'],
                'story' => $_POST['story'],
                'story_image' => $_FILES['story_image']['name']
            ];

            // Upload image
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["story_image"]["name"]);

            // Save to database
            if ($this->SuccessStoryModel->addSuccessStory($data)) {
                // Upload the image
                if (move_uploaded_file($_FILES["story_image"]["tmp_name"], $targetFile)) {
                    redirect('Success_Story/index');
                } else {
                    // Error uploading image
                    die("Error uploading image.");
                }
            } else {
                // Error adding success story
                die("Error adding success story.");
            }
        }
    }

    // Display all success stories
    public function index() {
        if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'admin')) {
            logOut();
        }
        // Get all success stories
        $successStories = $this->SuccessStoryModel->getAllSuccessStories();

        // Prepare data
        $data = [
            'success_stories' => $successStories
        ];

        // Load view
        $this->view('Success_Story/V_All_Success_Story', $data);
    }
}
?>
