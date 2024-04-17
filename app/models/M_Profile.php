<?php

class M_Profile
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

     public function getUserDetails($id) {
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

     public function getOrgDetails($id) {
       $this->db->query('SELECT users.*,bank_details.*, users_organisation.*,super_organisation.* 
       FROM users
       JOIN bank_details ON users.id=bank_details.user_id
       JOIN users_organisation ON users.id=users_organisation.user_id
       JOIN super_organisation ON users.id=super_organisation.user_id
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


     public function editUserDetails($id) {
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
     
     public function getUserDonations($id){
        $this->db->query("SELECT DISTINCT dp.*, f.title
        FROM donationpayments dp
        JOIN fundraiser f ON dp.fundraiser_id = f.fundraiser_id
        WHERE dp.user_id =:user_id");

        $this->db->bind(':user_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
           return $row;
        } else {
           return false;
        }
     }

     public function getUserStories($id){
        $this->db->query("SELECT s.*, u.*
        FROM stories s
        JOIN users u ON s.user_id=u.id
        WHERE s.user_id =:user_id ");

        $this->db->bind(':user_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
           return $row;
        } else {
           return false;
        }
     }

     public function getUserComplaints($id){
        $this->db->query("SELECT DISTINCT f_c.*, u.*
        FROM users u
        JOIN fundraiser_complain f_c ON f_c.complain_userID = u.id
        WHERE f_c.complain_userID =:user_id");

        $this->db->bind(':user_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
           return $row;
        } else {
           return false;
        }
     }

     public function getUserFundraisers($id){
        $this->db->query("SELECT DISTINCT f.*, u.*
        FROM users u
        JOIN fundraiser f ON f.user_id = u.id
        WHERE f.user_id =:user_id");

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