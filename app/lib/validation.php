<?php

class Validation
{
  public $data;
  public $flag = 0;
  public function __construct($postArray)
  {
    $postArray = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    foreach ($postArray as $key => $value) {
      $this->data[$key] = trim($value);
      $this->data[$key . '_err'] = '';

    }

  }


  private function EMPTY($value)
  {
    if (empty($this->data[$value])) {
      $this->data[$value . '_err'] = 'This field is required';
    }

  }



  private function FORMAT($value)
  {

    if (!preg_match("/^[a-zA-Z0-9\s]*$/", $this->data[$value])) {
      $this->data[$value . '_err'] = 'invalid ' . $value . ' format';
    }
  }

  private function CHECKBOX($value)
  {

    if ($this->data[$value] == 'on') {
      $this->data[$value] = 1;
    }
  }

  private function EMAIL($value)
  {
    if (!filter_var($this->data[$value], FILTER_VALIDATE_EMAIL)) {
      $this->data[$value . '_err'] = 'Invalid ' . $value . ' format';
    }
  }

  private function PASSWORD($value)
  {
    if (strlen($this->data[$value]) < 6) {
      $this->data[$value . '_err'] = 'Suggest a strong password';
    }
  }

  private function CONFIRMPASSWORD($value)
  {
    if ($this->data['password_err'] == '') {
      if ($this->data['password'] !== $this->data[$value]) {
        $this->data[$value . '_err'] = 'Passwords do not match';
      }
    }
  }

  public function imageUpload($Dir, $FileArray, $name, $dataKey)
  {

    if (!($FileArray['error'] == UPLOAD_ERR_OK)) {
      $this->data[$dataKey . '_err'] = 'Upload image';
      $this->flag = 1;
    } else {
      $uploadDir = '../public/Assets/Uploaded-Images/' . $Dir . '/';
      $uploadDirName = '/public/Assets/Uploaded-Images/' . $Dir . '/';

      $uploadedFile = $FileArray['tmp_name'];
      $uploadedFileName = $FileArray['name'];

      $fileExtension = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
      $newFileName = $this->data['user_id'] . '_' . $name . '.' . $fileExtension;
      $location = $uploadDir . $newFileName;
      $this->data[$dataKey] = $uploadDirName . $newFileName;

      if (move_uploaded_file($uploadedFile, $location)) {

        return true;

      } else {
        // Handle file upload error
        if (!is_dir($uploadDir)) {
          echo "Error: The upload directory does not exist.";
        } elseif (!is_writable($uploadDir)) {
          echo "Error: The upload directory is not writable.";
        } else {
          $this->data[$dataKey . '_err'] = "File upload failed";
          $this->flag = 1;
        }
      }
    }


  }

  public function countKeys($keyName)
  {
    $count = 0;

    foreach ($_FILES as $key => $value) {
      if (strpos($key, $keyName) === 0) {
        $count++;
      }
    }
    return $count;
  }

  public function validate($value, $criteria)
  {
    foreach ($criteria as $criterion) {
      $this->$criterion($value);
      if (!empty($this->data[$value . '_err'])) {
        $this->flag = 1;
        return ($this->data);
      }
    }
    return ($this->data);

  }
}

