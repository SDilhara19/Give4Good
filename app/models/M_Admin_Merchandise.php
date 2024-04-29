<?php
class M_Admin_Merchandise {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }
    


    public function viewPending(){
        $this->db->query('SELECT merchandise.*,fundraiser.title , fundraiser.amount
        FROM merchandise
        JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id
        WHERE merchandise.status = "Pending";');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
           return $row;
        } else {
           return false;
        }
    }

    public function viewRejected(){
        $this->db->query('SELECT merchandise.*,fundraiser.title , fundraiser.amount
        FROM merchandise
        JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id
        WHERE merchandise.status = "Deactive";');

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

    public function getAllMerch() {
        $this->db->query('SELECT merchandise.*,fundraiser.title , fundraiser.amount
        FROM merchandise
        JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id;');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function getActive() {
        $this->db->query('SELECT merchandise.*, fundraiser.title , fundraiser.amount
        FROM merchandise
        JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id
        WHERE merchandise.status = "Active";');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function activateMerch($id){
        $this->db->query('UPDATE merchandise SET status = "Active" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deactivateMerch($id){
        $this->db->query('UPDATE merchandise SET status = "Deactive" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getImage($id) {
        try {
            $this->db->query("SELECT * FROM merchandise WHERE id = :id ");
            $this->db->bind(':id', $id);
            $row = $this->db->resultSet();
             // Assuming single() returns an object
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch(Exception $e) {
            return "Error" . $e->getMessage();
        }
    }
    
    public function viewMerchOne($id) {
        try {
            $this->db->query("SELECT merchandise.*, fundraiser.* FROM merchandise JOIN fundraiser ON fundraiser.fundraiser_id = merchandise.fundraiser_id WHERE merchandise.id = :id");
            $this->db->bind(':id', $id);
            $row = $this->db->resultSet();
             // Change to single since it's fetching one record
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch(Exception $e) {
            return "Error" . $e->getMessage();
        }
    }
    
    public function getFundraiser($id) {
        try {
            $this->db->query("SELECT title FROM fundraiser WHERE fundraiser_id = :id");
            $this->db->bind(':id', $id);
            $row = $this->db->resultSet();
             // Change to single since it's fetching one record
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch(Exception $e) {
            return "Error" . $e->getMessage();
        }
    }
    
    
}
?>