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
     
public function getOrgDetails($id) {
       $this->db->query('SELECT 
          users.*,uo.*,bd.*
           FROM users
       JOIN bank_details bd ON users.id=bd.user_id
       JOIN users_organisation uo ON users.id=uo.user_id
       WHERE users.id=:user_id'
      //  
      );


       $this->db->bind(':user_id', $id);
        
         $row = $this->db->resultSet();

        //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
        } else {
            return false;
                    }
     }
public function getExecutiveDetails($id) {
       $this->db->query('SELECT 
          users.*,
        e.user_id AS executive_user_id, 
        e.fullname AS executive_fullname, 
        e.designation AS executive_designation, 
        e.nic_no AS executive_nic_no, 
        e.address AS executive_address, 
        e.email AS executive_email, 
        e.contact AS executive_contact, 
        e.nic_front AS executive_nic_front, 
        e.nic_back AS executive_nic_back
           FROM users
       JOIN executive e ON users.id=e.user_id
       WHERE users.id=:user_id'
      //  
      );


       $this->db->bind(':user_id', $id);
        
         $row = $this->db->resultSet();

        //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
        } else {
            return false;
                    }
     }
     
     public function getTreasurerDetails($id) {
       $this->db->query('SELECT 
          users.*,
        t.user_id AS treasurer_user_id, 
        t.fullname AS treasurer_fullname, 
        t.designation AS treasurer_designation, 
        t.nic_no AS treasurer_nic_no, 
        t.address AS treasurer_address, 
        t.email AS treasurer_email, 
        t.contact AS treasurer_contact, 
        t.nic_front AS treasurer_nic_front, 
        t.nic_back AS treasurer_nic_back
           FROM users
       JOIN treasurer t ON users.id=t.user_id
       WHERE users.id=:user_id'
      //  
      );


       $this->db->bind(':user_id', $id);
        
         $row = $this->db->resultSet();

        //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
        } else {
            return false;
                    }
     }
     public function getSecretaryDetails($id) {
       $this->db->query('SELECT 
          users.*,
        s.user_id AS secretary_user_id, 
        s.fullname AS secretary_fullname, 
        s.designation AS secretary_designation, 
        s.nic_no AS secretary_nic_no, 
        s.address AS secretary_address, 
       s.email AS secretary_email, 
        s.contact AS secretary_contact, 
        s.nic_front AS secretary_nic_front, 
        s.nic_back AS secretary_nic_back
           FROM users
       JOIN secretary s ON users.id=s.user_id
       WHERE users.id=:user_id'
      //  
      );


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
     
     public function getUserMerchandises($id){
        $this->db->query("SELECT DISTINCT m.*, u.*,f.*
        FROM fundraiser f
        JOIN merchandise m ON m.id = f.user_id
        JOIN users u ON f.user_id = u.id
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

     public function getSubPayments($id){
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