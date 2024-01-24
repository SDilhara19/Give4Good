<?php
class M_Admin_Story {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function viewPending(){
        $this->db->query('SELECT super_individual.*, users.username
        FROM super_individual
        JOIN users ON super_individual.user_id = users.id;
        WHERE super_individual.status = "pending";');
        
        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    }
?>