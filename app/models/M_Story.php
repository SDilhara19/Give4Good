<?php
class M_Story {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }


    public function pendingStory($data)
    {
        // $this->db->query('INSERT INTO stories (user_id, title, description, contact, email, status) 
        // VALUES ("12", "wq", "dw", "1", "sw@s", "pending")'); 
        $this->db->query('INSERT INTO stories (user_id, title, description, contact, email, image, status) 
        VALUES (:user_id, :title, :description, :contact, :email, :image, "Pending")');
        //Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['story_title']);
        $this->db->bind(':description', $data['story_description']);
        $this->db->bind(':contact', $data['phone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':image', $data['story_image']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function viewPending(){
        
    }

    public function getAllStories() 
    {
        $this->db->query('SELECT stories.*, users.username, users.type 
        FROM stories 
        JOIN users ON stories.user_id = users.id
        WHERE stories.status = "Active"
        ORDER BY stories.id DESC;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    // public function test($variable_that_has_the_id) {
    //     try {
    //         $temp_data = $this->db->query2("SELECT * FROM users WHERE id = :id", ['id' => $variable_that_has_the_id]);
    //         return $temp_data;
    //     } catch (\Exception $e) {
    //         // Handle the exception (log, rethrow, or other appropriate action)
    //         throw new \Exception("Error executing database query: " . $e->getMessage());
    //     }
    // }
  


    
}
?>