<?php
class M_Admin_Organisations {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function viewPending(){
        $this->db->query('SELECT 
                                super_organisation.*, 
                                users.*, 
                                bank_details.*, 
                                executive.fullname AS executive_name, 
                                executive.designation AS executive_designation,
                                executive.nic_no AS executive_nic,
                                executive.address AS executive_address,
                                executive.contact AS executive_contact,
                                executive.email AS executive_email,
<<<<<<< HEAD
                                executive.nic_front AS executive_nic_front,
                                executive.nic_back AS executive_nic_back,
=======
>>>>>>> main
                                treasurer.fullname AS treasurer_name, 
                                treasurer.designation AS treasurer_designation,
                                treasurer.nic_no AS treasurer_nic,
                                treasurer.address AS treasurer_address,
                                treasurer.contact AS treasurer_contact,
                                treasurer.email AS treasurer_email,
<<<<<<< HEAD
                                treasurer.nic_front AS treasurer_nic_front,
                                treasurer.nic_back AS treasurer_nic_back,
=======
>>>>>>> main
                                secretary.fullname AS secretary_name, 
                                secretary.designation AS secretary_designation,
                                secretary.nic_no AS secretary_nic,
                                secretary.address AS secretary_address,
                                secretary.contact AS secretary_contact,
<<<<<<< HEAD
                                secretary.email AS secretary_email,
                                secretary.nic_front secretary_nic_front,
                                secretary.nic_front secretary_nic_back

=======
                                secretary.email AS secretary_email
>>>>>>> main
                            FROM 
                                super_organisation
                            JOIN 
                                users ON super_organisation.user_id = users.id
                            LEFT JOIN 
                                bank_details ON super_organisation.user_id = bank_details.user_id
                            LEFT JOIN 
                                executive ON super_organisation.user_id = executive.user_id
                            LEFT JOIN 
                                treasurer ON super_organisation.user_id = treasurer.user_id
                            LEFT JOIN 
                                secretary ON super_organisation.user_id = secretary.user_id
                            WHERE 
                                super_organisation.status = "Pending"');
        
        //Check row
        $row = $this->db->resultSet();
        
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    

    public function viewActive(){
        $this->db->query('SELECT 
                                super_organisation.*, 
                                users.*, 
                                bank_details.*, 
                                executive.fullname AS executive_name, 
                                executive.designation AS executive_designation,
                                executive.nic_no AS executive_nic,
                                executive.address AS executive_address,
                                executive.contact AS executive_contact,
                                executive.email AS executive_email,
<<<<<<< HEAD
                                executive.nic_front AS executive_nic_front,
                                executive.nic_back AS executive_nic_back,
=======
>>>>>>> main
                                treasurer.fullname AS treasurer_name, 
                                treasurer.designation AS treasurer_designation,
                                treasurer.nic_no AS treasurer_nic,
                                treasurer.address AS treasurer_address,
                                treasurer.contact AS treasurer_contact,
                                treasurer.email AS treasurer_email,
<<<<<<< HEAD
                                treasurer.nic_front AS treasurer_nic_front,
                                treasurer.nic_back AS treasurer_nic_back,
=======
>>>>>>> main
                                secretary.fullname AS secretary_name, 
                                secretary.designation AS secretary_designation,
                                secretary.nic_no AS secretary_nic,
                                secretary.address AS secretary_address,
                                secretary.contact AS secretary_contact,
<<<<<<< HEAD
                                secretary.email AS secretary_email,
                                secretary.nic_front secretary_nic_front,
                                secretary.nic_front secretary_nic_back
=======
                                secretary.email AS secretary_email
>>>>>>> main
                            FROM 
                                super_organisation
                            JOIN 
                                users ON super_organisation.user_id = users.id
                            LEFT JOIN 
                                bank_details ON super_organisation.user_id = bank_details.user_id
                            LEFT JOIN 
                                executive ON super_organisation.user_id = executive.user_id
                            LEFT JOIN 
                                treasurer ON super_organisation.user_id = treasurer.user_id
                            LEFT JOIN 
                                secretary ON super_organisation.user_id = secretary.user_id
                            WHERE 
                                super_organisation.status = "Active"');
        
        //Check row
        $row = $this->db->resultSet();
        
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    
    
    

    public function viewDeactive(){
        $this->db->query('SELECT 
                                super_organisation.*, 
                                users.*, 
                                bank_details.*, 
                                executive.fullname AS executive_name, 
                                executive.designation AS executive_designation,
                                executive.nic_no AS executive_nic,
                                executive.address AS executive_address,
                                executive.contact AS executive_contact,
                                executive.email AS executive_email,
<<<<<<< HEAD
                                executive.nic_front AS executive_nic_front,
                                executive.nic_back AS executive_nic_back,
=======
>>>>>>> main
                                treasurer.fullname AS treasurer_name, 
                                treasurer.designation AS treasurer_designation,
                                treasurer.nic_no AS treasurer_nic,
                                treasurer.address AS treasurer_address,
                                treasurer.contact AS treasurer_contact,
                                treasurer.email AS treasurer_email,
<<<<<<< HEAD
                                treasurer.nic_front AS treasurer_nic_front,
                                treasurer.nic_back AS treasurer_nic_back,
=======
>>>>>>> main
                                secretary.fullname AS secretary_name, 
                                secretary.designation AS secretary_designation,
                                secretary.nic_no AS secretary_nic,
                                secretary.address AS secretary_address,
                                secretary.contact AS secretary_contact,
<<<<<<< HEAD
                                secretary.email AS secretary_email,
                                secretary.nic_front secretary_nic_front,
                                secretary.nic_front secretary_nic_back

=======
                                secretary.email AS secretary_email
>>>>>>> main
                            FROM 
                                super_organisation
                            JOIN 
                                users ON super_organisation.user_id = users.id
                            LEFT JOIN 
                                bank_details ON super_organisation.user_id = bank_details.user_id
                            LEFT JOIN 
                                executive ON super_organisation.user_id = executive.user_id
                            LEFT JOIN 
                                treasurer ON super_organisation.user_id = treasurer.user_id
                            LEFT JOIN 
                                secretary ON super_organisation.user_id = secretary.user_id
                            WHERE 
                                super_organisation.status = "Deactive"');
        
        //Check row
        $row = $this->db->resultSet();
        
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        } 
    }
    
    public function viewAll(){
        $this->db->query('SELECT 
                                super_organisation.*, 
                                users.*, 
                                bank_details.*, 
                                executive.fullname AS executive_name, 
                                executive.designation AS executive_designation,
                                executive.nic_no AS executive_nic,
                                executive.address AS executive_address,
                                executive.contact AS executive_contact,
                                executive.email AS executive_email,
<<<<<<< HEAD
                                executive.nic_front AS executive_nic_front,
                                executive.nic_back AS executive_nic_back,
=======
>>>>>>> main
                                treasurer.fullname AS treasurer_name, 
                                treasurer.designation AS treasurer_designation,
                                treasurer.nic_no AS treasurer_nic,
                                treasurer.address AS treasurer_address,
                                treasurer.contact AS treasurer_contact,
                                treasurer.email AS treasurer_email,
<<<<<<< HEAD
                                treasurer.nic_front AS treasurer_nic_front,
                                treasurer.nic_back AS treasurer_nic_back,
=======
>>>>>>> main
                                secretary.fullname AS secretary_name, 
                                secretary.designation AS secretary_designation,
                                secretary.nic_no AS secretary_nic,
                                secretary.address AS secretary_address,
                                secretary.contact AS secretary_contact,
<<<<<<< HEAD
                                secretary.email AS secretary_email,
                                secretary.nic_front secretary_nic_front,
                                secretary.nic_front secretary_nic_back

                                
=======
                                secretary.email AS secretary_email
>>>>>>> main
                            FROM 
                                super_organisation
                            JOIN 
                                users ON super_organisation.user_id = users.id
                            LEFT JOIN 
                                bank_details ON super_organisation.user_id = bank_details.user_id
                            LEFT JOIN 
                                executive ON super_organisation.user_id = executive.user_id
                            LEFT JOIN 
                                treasurer ON super_organisation.user_id = treasurer.user_id
                            LEFT JOIN 
                                secretary ON super_organisation.user_id = secretary.user_id');
        
        //Check row
        $row = $this->db->resultSet();
        
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    
<<<<<<< HEAD
    public function activateSuperOrganisation($user_id){
        $this->db->query('UPDATE super_organisation SET status = "Active"
        WHERE user_id = :user_id;');

        $this->db->bind(':user_id', $user_id);
=======
    public function activateSuperOrganisation($id){
        $this->db->query('UPDATE super_organisation SET status = "Active"
        WHERE id = :id;');

        $this->db->bind(':id', $id);
>>>>>>> main

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
<<<<<<< HEAD
    public function deactivateSuperOrganisation($user_id){
        $this->db->query('UPDATE super_organisation SET status = "Deactive"
        WHERE user_id = :user_id;');

        $this->db->bind(':user_id', $user_id);
=======
    public function deactivateSuperOrganisation($id){
        $this->db->query('UPDATE super_organisation SET status = "Deactive"
        WHERE id = :id;');

        $this->db->bind(':id', $id);
>>>>>>> main

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

<<<<<<< HEAD
    public function viewProfile(){}

=======
>>>>>>> main
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