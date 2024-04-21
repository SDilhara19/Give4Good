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
            // $data['documents'] = $this->superFundraiserModel->oFindDocuments($category);
            // var_dump($data['documents'][0]->document);
            $this->view('Fundraisers/V_Start_Organisation', $data);
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
                $obj->validate('note_dependent', ['EMPTY']);

            }

            $imagesCount = $obj->countKeys('fundraiser_image_');
            // var_dump($imagesCount);

            for ($i = 1; $i <= $imagesCount; $i++) {
                $obj->imageUpload('Fundraisers/Images', $_FILES['fundraiser_image_' . $i], $obj->data['title'] . '_' . $i, 'fundraiser_image_' . $i);
            }

            //document meta check

            if (!isset($_POST['material'])) {
                $obj->data['material'] = 0;
            } else {
                $obj->validate('material', ['CHECKBOX']);
                $materialCount = $obj->countKeys('material/item_name_');
                for ($i = 1; $i <= $materialCount; $i++) {
                    $obj->validate('material/item_name_' . $i, ['EMPTY']);
                    $obj->validate('no_required_' . $i, ['EMPTY']);
                    $obj->validate('material_description_' . $i, ['EMPTY']);
                    $obj->validate('material/item_name_' . $i, ['EMPTY']);
                    $obj->imageUpload('Fundraisers/Materials', $_FILES['material_image_' . $i], $obj->data['title'] . '_' . $i, 'material_image_' . $i);
                }
                $locationCount = $obj->countKeys('town/city_');
                for ($i = 1; $i <= $locationCount; $i++) {
                    $obj->validate('town/city_' . $i, ['EMPTY']);
                    $obj->validate('contact_' . $i, ['EMPTY']);
                    $obj->validate('address_' . $i, ['EMPTY']);
                }

            }

            // $this->view('test', $obj);

            if ($obj->flag == 1) {
                $this->view('Fundraisers/V_Start_Individual', $obj->data);
            } else {

                // var_dump($obj->data);

                if ($this->superFundraiserModel->fundraiserStart($obj->data)) {
                    //change redirection

                    redirect(URLROOT . '/Index');
                } else {
                    die("Something went wrong");
                }
            }
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

}

