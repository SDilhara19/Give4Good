<?php
require APPROOT . '/lib/validation.php';

class Fundraisersuper extends controller
{
    private $superFundraiserModel;
    public function __construct()
    {
        $this->superFundraiserModel = $this->model('M_Super_Fundraiser');
        $this->checkUserLogin();
    }

    private function checkUserLogin()
    {
        if (isloggedIn()) {
            if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'individual')) {
                if ($_SESSION['userLevel'] == 1) {
                    redirect(URLROOT . '/Individual/super');
                }
            } else if (isset($_SESSION['userType']) && ($_SESSION['userType'] == 'organisation')) {
                if ($_SESSION['userLevel'] == 1) {
                    redirect(URLROOT . '/Organisation/super');
                }
            } else {
                logOut();
                redirect(URLROOT . '/Users');
            }


        } else {
            logOut();
            redirect(URLROOT . '/Users');
        }
    }

    public function index()
    {
        if ($_SESSION['userType'] == 'individual') {
            $this->view('Fundraisers/V_Category_Individual');
        } else if ($_SESSION['userType'] == 'organisation') {
            $this->view('Fundraisers/V_Category_Organisation');
        }
    }

    public function istart($category)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // $this->view('test');
            $this->fundraiser_start($category);
        } else {
            $data = [];
            $data['documents'] = $this->superFundraiserModel->iFindDocuments($category);
            // var_dump($data['documents'][0]->document);
            $this->view('Fundraisers/V_Start_Individual', $data);
        }

    }

    public function ostart($category)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // $this->view('test');
            $this->fundraiser_start($category);
        } else {
            $data = [];
            $data['documents'] = $this->superFundraiserModel->oFindDocuments($category);
            // var_dump($data['documents'][0]->document);
            $this->view('Fundraisers/V_Start_Organisation', $data);
        }
    }

    public function start()
    {
        // Check if the 'image' key exists in the $_FILES array
        if (isset($_FILES['image'])) {
            // Get the temporary path of the uploaded image
            $tempImagePath = $_FILES['image']['tmp_name'];

            // Check if the temporary file exists
            if (file_exists($tempImagePath)) {
                date_default_timezone_set('Asia/Colombo');

                // Read the EXIF data from the temporary image file
                $exifData = exif_read_data($tempImagePath, 'EXIF', true);

                // Check if EXIF data was read successfully
                if ($exifData !== false) {
                    // Process the EXIF data as needed
                    echo "<pre>";
                    print_r($exifData);
                    echo "</pre>";
                } else {
                    echo "Failed to read EXIF data from the image.";
                }
            } else {
                echo "Temporary image file does not exist.";
            }
        } else {
            // $data = [];
            // $data['documents'] = $this->superFundraiserModel->oFindDocuments($category);÷
            // var_dump($data['documents'][0]->document);
            $this->view('temp', );
        }
    }



    private function fundraiser_start($category)
    {
        try {

            $obj = new Validation($_POST);
            $obj->data['user_id'] = $_SESSION['userId'];
            $obj->data['category'] = $category;
            $obj->validate('title', ['EMPTY']);
            $obj->validate('fund_story', ['EMPTY']);
            $obj->validate('amount', ['EMPTY']);
            $obj->validate('end_date', ['EMPTY']);
            if (!isset($_POST['anonymous'])) {
                $obj->data['anonymous'] = 0;
            }
            $obj->validate('anonymous', ['CHECKBOX']);
            if (!isset($_POST['child'])) {
                $obj->data['child'] = 0;
            } else {
                $obj->validate('child', ['CHECKBOX']);
                $obj->validate('dependent_name', ['EMPTY']);
                $obj->validate('dependent_birthdate', ['EMPTY']);
                $obj->validate('relationship', ['EMPTY']);
                $obj->validate('dependent_edu_ins/work', ['EMPTY']);
                $obj->imageUpload('Fundraisers/Birth-Certificates', $_FILES['birth_certificate'], $obj->data['title'], 'birth_certificate');
            }

            $imagesCount = $obj->countKeys('fundraiser_image_', $_FILES);
            $obj->data['imageCount'] = $imagesCount;

            for ($i = 1; $i <= $imagesCount; $i++) {
                $obj->imageUpload('Fundraisers/Images', $_FILES['fundraiser_image_' . $i], $obj->data['title'] . '_' . $i, 'fundraiser_image_' . $i);
            }

            //document meta check
            if ($_SESSION['userType'] == 'individual') {
                $documents = $this->superFundraiserModel->iFindDocuments($category);
                foreach ($documents as $document) {
                    $obj->imageUpload('Fundraisers/Document', $_FILES[$document->document], $obj->data['title'] . '_' . $document->document, $document->document);

                }
            } else if ($_SESSION['userType'] == 'organisation') {
                $documents = $this->superFundraiserModel->oFindDocuments($category);
                foreach ($documents as $document) {
                    $obj->imageUpload('Fundraisers/Document', $_FILES[$document->document], $obj->data['title'] . '_' . $document->document, $document->document);
                }
            }

            //material check
            if (!isset($_POST['material'])) {
                $obj->data['material'] = 0;
            } else {
                $obj->validate('material', ['CHECKBOX']);
                $materialCount = $obj->countKeys('material/item_name_', $_POST);
                $obj->data['materialCount'] = $materialCount;
                for ($i = 1; $i <= $materialCount; $i++) {
                    $obj->validate('material/item_name_' . $i, ['EMPTY']);
                    $obj->validate('no_required_' . $i, ['EMPTY']);
                    $obj->validate('material_description_' . $i, ['EMPTY']);
                    $obj->imageUpload('Fundraisers/Materials', $_FILES['material_image_' . $i], $obj->data['title'] . '_' . $i, 'material_image_' . $i);
                }
                $locationCount = $obj->countKeys('town/city_', $_POST);
                $obj->data['locationCount'] = $locationCount;
                for ($i = 1; $i <= $locationCount; $i++) {
                    $obj->validate('town/city_' . $i, ['EMPTY']);
                    $obj->validate('contact_' . $i, ['EMPTY']);
                    $obj->validate('address_' . $i, ['EMPTY']);
                }

                $obj->validate('latitude', ['EMPTY']);
                $obj->validate('longitude', ['EMPTY']);

            }

            if ($_SESSION['userType'] == 'organisation') {
                if (!isset($_POST['merchandise'])) {
                    $obj->data['merchandise'] = 0;
                } else {

                    $obj->validate('merchandise', ['CHECKBOX']);
                    $merchandiseCount = $obj->countKeys('merch_name_', $_POST);
                    $obj->data['merchandiseCount'] = $merchandiseCount;
                    for ($i = 1; $i <= $merchandiseCount; $i++) {
                        $obj->validate('merch_name_' . $i, ['EMPTY']);
                        $obj->validate('merch_price_' . $i, ['EMPTY']);
                        $obj->validate('amount_to_fund_' . $i, ['EMPTY']);
                        $obj->validate('stock_' . $i, ['EMPTY']);
                        $obj->validate('merch_description_' . $i, ['EMPTY']);
                        $obj->imageUpload('Fundraisers/Merchandise', $_FILES['merch_image_' . $i], $obj->data['title'] . '_' . $i, 'merch_image_' . $i);
                    }
                }
            }




            if ($obj->flag == 1) {

                if ($_SESSION['userType'] == 'individual') {
                    ;
                    $this->view('test', $obj->data);

                    // $obj->data['documents'] = $this->superFundraiserModel->iFindDocuments($category);
                    // $this->view('Fundraisers/V_Start_Individual', $obj->data);
                } else if
                ($_SESSION['userType'] == 'organisation') {
                    $this->view('test', $obj);

                    // $obj->data['documents'] = $this->superFundraiserModel->oFindDocuments($category);
                    // $this->view('Fundraisers/V_Start_Organisation', $obj->data);
                }

            } else {

                if ($this->superFundraiserModel->fundraiserStart($obj->data)) {
                    // $this->view('test', $obj);
                    redirect(URLROOT . '/Index');
                        //  $this->view('test', $obj);
                        // var_dump($obj->data);
                } else {
                    die("Something went wrong");
                }
            }
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

}

