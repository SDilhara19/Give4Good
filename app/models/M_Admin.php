<?php
class M_Admin {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function viewPendings() {
        return 0;

    }





    public function viewDonations() {
        $this->db->query('SELECT donationpayments.*, users.*, fundraiser.*
                         FROM donationpayments 
                         JOIN users ON donationpayments.user_id = users.id
                         JOIN fundraiser ON donationpayments.fundraiser_id = fundraiser.fundraiser_id
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
        $this->db->query('SELECT donationpayments.*, users.*, fundraiser.*
        FROM donationpayments 
        JOIN users ON donationpayments.user_id = users.id
        JOIN fundraiser ON donationpayments.fundraiser_id = fundraiser.fundraiser_id
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewComplaints() {
        $this->db->query('SELECT fundraiser_complain.*, users.*, fundraiser.*
        FROM fundraiser_complain 
        JOIN users ON fundraiser_complain.user_id = users.id 
        JOIN fundraiser ON fundraiser_complain.fundraiser_id = fundraiser.fundraiser_id;
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
