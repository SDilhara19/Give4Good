<?php
class M_Admin_Fundraiser {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }


    

    public function viewPending(){
        $this->db->query('SELECT fundraiser.*, users.username, users.type
        FROM fundraiser
        JOIN users ON fundraiser.user_id = users.id
        WHERE fundraiser.status = "pending";');

$row = $this->db->resultSet();

//Check row
$row = $this->db->resultSet();
if ($this->db->rowCount() > 0) {
    return $row;
} else {
    return false;
        
    }

}
public function viewActive(){
    $this->db->query('SELECT fundraiser.*, users.username, users.type
    FROM fundriaser
    JOIN users ON fundraiser.user_id = users.id
    WHERE fundraiser.status = "active";');

    //Check row
    $row = $this->db->resultSet();
    if ($this->db->rowCount() > 0) {
        return $row;
    } else {
        return false;
    }
    
}


    // public function makeActive(){
    //     $this->db->query('SELECT stories.*, users.username, users.type
    //     FROM stories
    //     JOIN users ON stories.user_id = users.id
    //     WHERE stories.status = "pending";');

    //     //Check row
    //     if ($this->db->rowCount() > 0) {
    //         return $row;
    //     } else {
    //         return false;
    //     }
        
    // }

    public function getAllFundraisers(){
        $this->db->query('SELECT fundraiser.*, users.username, type FROM fundraiser JOIN users ON fundraiser.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function viewDeactivated(){
        $this->db->query('SELECT fundraiser.*, users.username, users.type
        FROM fundriaser
        JOIN users ON fundraiser.user_id = users.id
        WHERE fundraiser.status = "deactive";');
    
        //Check row
        $row = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        
    }

    public function viewMerch(){

    }
    
    public function viewFundOne(){

    }

    public function viewFundDoc(){

    }    

}
