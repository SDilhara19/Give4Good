<?php

class M_Admin_Dashboard
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function IndSignup() {
            $this->db->query("SELECT users.* FROM users WHERE users.type='individual' AND users.user_level = '1' ORDER BY users.signup_time DESC LIMIT 4");
            
            $row = $this->db->resultSet();
    
             //Check row
             if ($this->db->rowCount() > 0) {
                 return $row;
                } else {
                 return false;
                }
    }

    
}



