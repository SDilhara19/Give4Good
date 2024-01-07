<?php

class Validation
{
  public $data;
  public $flag = 0;
  public function __construct($postArray)
  {
    $postArray = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    foreach ($postArray as $key => $value) {
      if (strpos($this->data[$key],  "Image") !== true)
      {
        $this->data[$key] = trim($value);
      }
      else if (strpos($this->data[$key],  "Image") !== false)
      {
        $this->data[$key] = $value;
      }

    }

    foreach ($postArray as $key => $value) {
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

    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->data[$value])) {
      $this->data[$value . '_err'] = 'invalid ' . $value . ' format';
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

  private function IMAGE($value)
  {
    $check = getimagesize($value["image"]["tmp_name"]);
    if ($check !== true) {
      $this->data[$value . '_err'] = 'Upload an image';
    }
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

?>