<?php
class M_Index
{
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
        LEFT JOIN (
            SELECT fundraiser_id, MIN(imgid) AS imgid
            FROM fundraiser_images
            GROUP BY fundraiser_id
        ) AS first_image ON fundraiser.fundraiser_id = first_image.fundraiser_id
        LEFT JOIN fundraiser_images i ON first_image.imgid = i.imgid
        WHERE fundraiser.status = "Active";
        ');
    

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    // public function featuredFundraisers()
    // {
    //     $all = $this->getAllFundriasers();
    //     if ($all !== false) {
    //         return array_slice($all, 0, 5);
    //     } else {
    //         return false;
    //     }
    // }

    public function getAllStories()
    {
        try {
            $this->db->query('SELECT stories.*, users.username, users.type 
            FROM stories 
            JOIN users ON stories.user_id = users.id
            WHERE stories.status = "Active"
            ORDER BY stories.id DESC
            LIMIT 4;
            
            ');

            $row = $this->db->resultSet();

            //Check row
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo "Error: " . $e->getMessage();
            return false;
        }


    }
}





