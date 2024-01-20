<?php
class M_Admin {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }




    public function viewDonations() 
    {
        $this->db->query('SELECT stories.*, users.username, type FROM stories JOIN users ON stories.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function addDocument($category, $documentName) 
    {
        $this->db->query('Update tablename');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }


    
}
