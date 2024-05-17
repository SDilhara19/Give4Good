<?php
class M_Merchandise
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAMerchandise($id)
    {
        $this->db->query('SELECT merchandise.*, fundraiser.title AS fundraiser_title
FROM merchandise
JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id
WHERE merchandise.id = :id;
');

        $this->db->bind(':id', $id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function getAllMerchandise()
    {
        $this->db->query("SELECT merchandise.*, fundraiser.title AS fundraiser_title
FROM merchandise
JOIN fundraiser ON merchandise.fundraiser_id = fundraiser.fundraiser_id
WHERE merchandise.status = 'Active'");

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function getDeliveryDetails($user_id)
    {
        $this->db->query('SELECT * FROM location WHERE user_id = :id;');

        $this->db->bind(':id', $user_id);

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function merch_buy($data)
    {
        $query = 'INSERT INTO merch_sales (payment_id, user_id, merch_id, quantity, total_amount) 
        VALUES (:payment_id, :user_id, :merch_id, :quantity, :total_amount)';

        // Bind values to the placeholders
        $this->db->query($query);
        
        // $this->db->bind(':payment_id', '97mcks');
        // $this->db->bind(':user_id', 60);
        // $this->db->bind(':merch_id', 10);
        // $this->db->bind(':quantity', 1);
        // $this->db->bind(':total_amount', 2200);

     
        $this->db->bind(':payment_id', $data['payment_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':merch_id', $data['merch_id']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':total_amount', $data['total']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAFundraiser($id)
    {

        try {
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



}
?>