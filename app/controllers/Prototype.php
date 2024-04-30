<<<<<<< HEAD
<?php
class Prototype extends controller
{
    private $Model;
    public function __construct()
    {
        $this->Model = $this->model('M_Story');
  
    }


    public function index() {
      try {
        $variable_that_has_the_id = 40;
          $temp_data = $this->Model->db->query2("SELECT * FROM users WHERE id = :id", ['id' => $variable_that_has_the_id]); 
          var_dump($temp_data);
      } catch (\Exception $e) {
          // Handle the exception (log, rethrow, or other appropriate action)
          echo "Error: " . $e->getMessage();
      }
  }
  
}
=======
<?php
class Prototype extends controller
{
    private $Model;
    public function __construct()
    {
        $this->Model = $this->model('M_Story');
  
    }


    public function index() {
      try {
        $variable_that_has_the_id = 40;
          $temp_data = $this->Model->db->query2("SELECT * FROM users WHERE id = :id", ['id' => $variable_that_has_the_id]); 
          var_dump($temp_data);
      } catch (\Exception $e) {
          // Handle the exception (log, rethrow, or other appropriate action)
          echo "Error: " . $e->getMessage();
      }
  }
  
}
>>>>>>> main
