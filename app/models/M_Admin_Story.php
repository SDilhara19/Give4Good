<?php
class M_Admin_Story {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }
    

    public function viewPending(){
        $this->db->query('SELECT stories.*, users.username, users.type
        FROM stories
        JOIN users ON stories.user_id = users.id
        WHERE stories.status = "pending";');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
           return $row;
        } else {
           return false;
        }
    }

    public function viewRejected(){
        $this->db->query('SELECT stories.*, users.username, users.type 
        FROM stories 
        JOIN users ON stories.user_id = users.id 
        WHERE stories.status = "deactive";');

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

    public function getAllStories() {
        $this->db->query('SELECT stories.*, users.username, users.type 
        FROM stories 
        JOIN users ON stories.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function getActiveStories() {
        $this->db->query('SELECT stories.*, users.username, users.type
        FROM stories
        JOIN users ON stories.user_id = users.id
        WHERE stories.status = "active";');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function activateStory($id){
        $this->db->query('UPDATE stories SET status = "Active" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deactivateStory($id){
        $this->db->query('UPDATE stories SET status = "Deactive" 
        WHERE id = :id;');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
