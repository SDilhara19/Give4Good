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
$this->db->query('SELECT * FROM merchandise WHERE id = :id;');
        
        $this->db->bind(':id', $id);

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
        $this->db->query('INSERT INTO merch_sales (user_id, merch_id, quantity, total_amount, payment_time) 
        VALUES (:user_id, :merch_id, :quantity, :total_amount, :payment_time)');
        // Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':merch_id', $data['merch_id']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':total_amount', $data['total_amount']);
        $this->db->bind(':payment_time', date('Y-m-d H:i:s')); // Assuming current timestamp

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



}
?>