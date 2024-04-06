<?php
class M_Fundraiser {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function getAllFundriasers() 
    {
        $this->db->query('SELECT fundraiser.*, users.username, users.type FROM fundraiser JOIN users ON fundraiser.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    } 

    public function complaints($data)
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
}

