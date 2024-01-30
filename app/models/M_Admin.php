<?php
class M_Admin {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }




    public function viewDonations() {
        $this->db->query('SELECT donationpayments.*, users.username 
        FROM donationpayments 
        JOIN users 
        ON donationpayments.user_id = users.id;
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

    public function viewComplaints() {
        $this->db->query('SELECT fundraiser_complain.*, users.username, users.phone
        FROM fundraiser_complain 
        JOIN users 
        ON fundraiser_complain.user_id = users.id ;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function viewContributions() {
        $this->db->query('SELECT donationpayments.*, users.username 
        FROM donationpayments 
        JOIN users 
        ON donationpayments.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    
}
