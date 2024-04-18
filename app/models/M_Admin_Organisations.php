<?php
class M_Admin_Organisations {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function viewPending(){
        $this->db->query('SELECT super_organisation.*, users.*
        FROM super_organisation
        JOIN users ON super_organisation.user_id = users.id
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
        $this->db->query('SELECT super_organisation.*, users.*
        FROM super_organisation
        JOIN users ON super_organisation.user_id = users.id
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
        $this->db->query('SELECT super_organisation.*, users.*
        FROM super_organisation
        JOIN users ON super_organisation.user_id = users.id
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
        $this->db->query('SELECT super_organisation.*, users.*
        FROM super_organisation
        JOIN users ON super_organisation.user_id = users.id;');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    //public function activateSuperOrganisation($id){}
    //public function deactivateSuperOrganisation($id){}

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