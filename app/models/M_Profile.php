<?php

class M_Profile
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

     public function getUserDetails($id) 
   {
       $this->db->query('SELECT users.*,bank_details.*, users_individual.*,super_individual.* 
       FROM users
       JOIN bank_details ON users.id=bank_details.user_id
       JOIN users_individual ON users.id=users_individual.user_id
       JOIN super_individual ON users.id=super_individual.user_id
       WHERE users.id=:user_id');


       $this->db->bind(':user_id', $id);
        
         $row = $this->db->resultSet();

        //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
        } else {
            return false;
                    }
     }
}