<?php
class M_Admin_Individual {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function viewPending(){
        $this->db->query('SELECT super_individual.*, users.*
        FROM super_individual
        JOIN users ON super_individual.user_id = users.id
        WHERE super_individual.status = "pending";');
        
        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewActive(){
        $this->db->query('SELECT super_individual.*, users.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id 
        WHERE super_individual.status = "active";');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    } 

    public function viewDeactive(){
        $this->db->query('SELECT super_individual.*, users.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id 
        WHERE super_individual.status = "deactive";');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    } 

    public function viewAll(){
        $this->db->query('SELECT super_individual.*, users.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id;');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function activateSuperIndividual($id){
        $this->db->query('UPDATE super_individual SET status = "Active"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deactivateSuperIndividual($id){
        $this->db->query('UPDATE super_individual SET status = "Deactive"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function viewIndividuals(){
        $this->db->query('SELECT users_individual.*, users.*
        FROM users_individual
        JOIN users ON users_individual.user_id = users.id;');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
}
?>