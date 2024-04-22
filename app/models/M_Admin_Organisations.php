<?php
class M_Admin_Organisations {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function viewPending(){
        $this->db->query('SELECT super_organisation.*, users.*, bank_details.*, executive.*, treasurer.*
            FROM super_organisation
            JOIN users ON super_organisation.user_id = users.id
            LEFT JOIN bank_details ON super_organisation.user_id = bank_details.user_id
            LEFT JOIN executive ON super_organisation.user_id = executive.user_id
            LEFT JOIN treasurer ON super_organisation.user_id = treasurer.user_id
            WHERE super_organisation.status = "Pending";');
    
        //Check row
        $row = $this->db->resultSet();
    
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewActive(){
        $this->db->query('SELECT super_organisation.*, users.*, bank_details.*, executive.*, treasurer.*
            FROM super_organisation
            JOIN users ON super_organisation.user_id = users.id
            LEFT JOIN bank_details ON super_organisation.user_id = bank_details.user_id
            LEFT JOIN executive ON super_organisation.user_id = executive.user_id
            LEFT JOIN treasurer ON super_organisation.user_id = treasurer.user_id
            WHERE super_organisation.status = "Active";');
    
        //Check row
        $row = $this->db->resultSet();
    
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    
    

    public function viewDeactive(){
        $this->db->query('SELECT super_organisation.*, users.*, bank_details.*, executive.*, treasurer.*
            FROM super_organisation
            JOIN users ON super_organisation.user_id = users.id
            LEFT JOIN bank_details ON super_organisation.user_id = bank_details.user_id
            LEFT JOIN executive ON super_organisation.user_id = executive.user_id
            LEFT JOIN treasurer ON super_organisation.user_id = treasurer.user_id
            WHERE super_organisation.status = "Deactive";');
    
        //Check row
        $row = $this->db->resultSet();
    
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    public function viewAll(){
        $this->db->query('SELECT super_organisation.*, users.*, bank_details.*, executive.*, treasurer.*
            FROM super_organisation
            JOIN users ON super_organisation.user_id = users.id
            LEFT JOIN bank_details ON super_organisation.user_id = bank_details.user_id
            LEFT JOIN executive ON super_organisation.user_id = executive.user_id
            LEFT JOIN treasurer ON super_organisation.user_id = treasurer.user_id;');
    
        //Check row
        $row = $this->db->resultSet();
    
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    public function activateSuperOrganisation($id){
        $this->db->query('UPDATE super_organisation SET status = "Active"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function deactivateSuperOrganisation($id){
        $this->db->query('UPDATE super_organisation SET status = "Deactive"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function viewOrganisations(){
        $this->db->query('SELECT users_organisation.*, users.*
        FROM users_organisation
        JOIN users ON users_organisation.user_id = users.id;');

        $row = $this->db->resultSet();

        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

}
?>