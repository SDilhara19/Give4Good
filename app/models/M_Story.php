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
        $this->db->query('INSERT INTO stories (user_id, title, description, contact, email, status) 
        VALUES (:user_id, :title, :description, :contact, :email, "pending")');
        //Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['story_title']);
        $this->db->bind(':description', $data['story_description']);
        $this->db->bind(':contact', $data['phone']);
        $this->db->bind(':email', $data['email']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


}
?>