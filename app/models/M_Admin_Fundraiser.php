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
    
    


    public function activateFundraiser($fundraiser_id){
        $this->db->query('UPDATE fundraiser SET status = "Active" 
        WHERE fundraiser_id = :fundraiser_id;');

        $this->db->bind(':fundraiser_id', $fundraiser_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
       
    }

    public function deactivateFundraiser($fundraiser_id){
        $this->db->query('UPDATE fundraiser SET status = "Deactive" WHERE fundraiser_id = :fundraiser_id');
        $this->db->bind(':fundraiser_id', $fundraiser_id);
    
        if($this->db->execute()){
            return true;
        } else {
            return false;
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

    //function updateViews($newViews, $fundraiserId){
      //  try{
        //    $this->db->query("UPDATE fundraiser SET view_counts = :view_counts WHERE fundraiser_id = :fundraiser_id");
          //  $this->db->bind(':view_counts', $newViews);
            //$this->db->bind(':fundraiser_id', $fundraiserId);

    //return $this->db->execute();
        //}
        //catch(Exception $e){
          //  return "Error" . $e->getMessage();
       // }
    //}



    public function getDocImages($id){
        try {
            $this->db->query("SELECT * FROM uploaded_documents WHERE fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);
    
            $row = $this->db->resultSet();
    
            //Check row
            if ($row) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            error_log('Error in getDocImages: ' . $e->getMessage());
            return false;
        }
    }

     public function getMaterialImages($id){
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

     public function viewFundDoc($id){
         try{
            $this->db->query("SELECT uploaded_documents.* FROM uploaded_document WHERE uploaded_documents.fundraiser_id = :fundraiser_id");
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

      public function getFundOne($id){
        try {
            $this->db->query("SELECT fundraiser.*, users.* FROM fundraiser JOIN users ON fundraiser.user_id = users.id WHERE fundraiser.fundraiser_id = :fundraiser_id");
            $this->db->bind(':fundraiser_id', $id);
    
            $row = $this->db->single();
    
            //Check row
            if ($row) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            error_log('Error in getFundOne: ' . $e->getMessage());
            return false;
        }
    }
    
    public function viewFundOne($id){
     
        try{
            $this->db->query("SELECT fundraiser.*, users.* FROM fundraiser JOIN users ON fundraiser.user_id = users.id WHERE fundraiser.fundraiser_id = :fundraiser_id");
    
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

}
?>