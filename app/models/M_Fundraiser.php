<?php
class M_Fundraiser {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function getAllFundriasers() 
    {
        $this->db->query('SELECT fundraiser.*, users.username, users.type, i.imgid, i.img
        FROM fundraiser
        JOIN users ON fundraiser.user_id = users.id
        JOIN (
            SELECT fundraiser_id, MIN(imgid) AS imgid
            FROM fundraiser_images
            GROUP BY fundraiser_id
        ) AS first_image ON fundraiser.fundraiser_id = first_image.fundraiser_id
        JOIN fundraiser_images i ON first_image.imgid = i.imgid
        WHERE fundraiser.status = "Active";');
    

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    } 

    public function complaints($data)
    {
        // $this->db->query('INSERT INTO stories (user_id, title, description, contact, email, status) 
        // VALUES ("12", "wq", "dw", "1", "sw@s", "pending")'); 
        $this->db->query('INSERT INTO stories (user_id, title, description, contact, email, image, status) 
        VALUES (:user_id, :title, :description, :contact, :email, :image, "Pending")');
        //Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['story_title']);
        $this->db->bind(':description', $data['story_description']);
        $this->db->bind(':contact', $data['phone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':image', $data['story_image']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function getAFundraiser($id) 
    {

        try{
        $this->db->query("SELECT fundraiser.*, users.username, users.type, users.address, users.email, users.phone FROM fundraiser JOIN users ON fundraiser.user_id = users.id WHERE fundraiser.fundraiser_id = :fundraiser_id");

        $this->db->bind(':fundraiser_id', $id);
        // $rows = $this->db->resultSet();

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    } catch (Exception $e) {
        
        error_log('Error in getAFundraiser: ' . $e->getMessage());
        $err = "Error: " . $e->getMessage();
        return $err;
    }

    } 

    public function getImages($id){
        try{
            $this->db->query("SELECT * FROM fundraiser_images WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        }
        catch(Exception $e)
        {
            return "Error" . $e->getMessage();
        }
    }

    public function getMerchandise($id){
        try{
            $this->db->query("SELECT * FROM merchandise WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        }
        catch(Exception $e)
        {
            return "Error" . $e->getMessage();
        }
    }

    public function getMaterials($id){
        try{
            $this->db->query("SELECT * FROM material WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        }
        catch(Exception $e)
        {
            return "Error" . $e->getMessage();
        }
    }

    public function getMaterialLocation($id){
        try{
            $this->db->query("SELECT * FROM material_location WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        }
        catch(Exception $e)
        {
            return "Error" . $e->getMessage();
        }
    }

    function updateViews($newViews, $fundraiserId){
        try{
            $this->db->query("UPDATE fundraiser SET view_counts = :view_counts WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':view_counts', $newViews);
            $this->db->bind(':fundraiser_id', $fundraiserId);

    return $this->db->execute();
        }
        catch(Exception $e){
            return "Error" . $e->getMessage();
        }
    }

    function payForm($id){
        try{
            $this->db->query("SELECT fundraiser.fundraiser_id, fundraiser.title, users.username, users.id FROM fundraiser JOIN users ON fundraiser.user_id = users.id WHERE fundraiser.fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);

            $row = $this->db->resultSet();
    
            //Check row
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
               return false;
            }
            }
            catch(Exception $e)
            {
                return "Error" . $e->getMessage();
            }
    }

}

