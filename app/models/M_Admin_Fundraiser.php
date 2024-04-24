<?php
class M_Admin_Fundraiser{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function viewPending(){
        $this->db->query('SELECT fundraiser.*, users.username, users.type, merchandise.product_name
        FROM fundraiser
        JOIN users ON fundraiser.user_id = users.id
        LEFT JOIN merchandise ON fundraiser.fundraiser_id = merchandise.fundraiser_id
        WHERE fundraiser.status = "Pending";');
    
        //Check row
        $row = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewActive(){
        $this->db->query('SELECT fundraiser.*, users.username, users.type, merchandise.product_name
        FROM fundraiser
        JOIN users ON fundraiser.user_id = users.id
        LEFT JOIN merchandise ON fundraiser.fundraiser_id = merchandise.fundraiser_id
        WHERE fundraiser.status = "Active";');
    
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
        $this->db->query('SELECT fundraiser.*, users.username, users.type 
        FROM fundraiser 
        JOIN users ON fundraiser.user_id = users.id
        LEFT JOIN merchandise ON fundraiser.fundraiser_id = merchandise.fundraiser_id;');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewDeactivated(){
        $this->db->query('SELECT fundraiser.*, users.username, users.type, merchandise.product_name
            FROM fundraiser
            JOIN users ON fundraiser.user_id = users.id
            LEFT JOIN merchandise ON fundraiser.fundraiser_id = merchandise.fundraiser_id
            WHERE fundraiser.status = "Deactive";');
    
        //Check row
        $row = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    
    


    public function activateFundraiser($id){
        try{
        $this->db->query('UPDATE fundraiser SET status = "Active" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

       } 
       catch(Exception $e){
           return "Error" . $e->getMessage();
       }
       
    }
    // public function viewMerch(){


    //     $this->db->bind(':id', $id);

    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    public function deactivateFundraiser($id){
        $this->db->query('UPDATE fundraiser SET status = "Deactive" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //  public function viewMerch(){

    //  }

    //  public function viewFundOne(){

    //  }

    //  public function viewFundDoc(){

    //   }    
}
