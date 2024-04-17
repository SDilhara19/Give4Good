<?php
class M_Donations
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function fundTitle2($fundraiser_id)
    {
        try {

            $data = $this->db->selectOne('fundraiser', 'fundraiser_id', $fundraiser_id, $limit = 1);
            return $data;
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }

    public function createDonationPayment()
    {
        try {
            $this->db->query('INSERT INTO donationPayments (user_id, fundraiser_id, donated_amount, contribution_amount, payment_date) 
        VALUES ("38", "2", "2133", "32", "2023-12-12")');

            // Bind values
            // $this->db->bind(':user_id', $data['user_id']);
            // $this->db->bind(':fundraiser_id', $data['fundraiser_id']);
            // $this->db->bind(':donated_amount', $data['donated_amount']);
            // $this->db->bind(':contribution_amount', $data['contribution_amount']);
            // $this->db->bind(':payment_date', $data['payment_date']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (Error $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }
}



