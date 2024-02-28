<?php
class M_Super_Fundraiser
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function fundraiserStart($data)
    {
        try {
            // var_dump($data);
            $this->db->query('INSERT INTO fundraiser (title, story, Category, amount, user_id, anonymous, parent_funding, end_date) VALUES (:title, :story, "Health", :amount, :user_id, :anonymous, :parent_funding, :end_date)');

            // //Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':story', $data['fund_story']);
            // $this->db->bind(':Category', $data['']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':anonymous', $data['anonymous']);
            $this->db->bind(':parent_funding', $data['child']);
            $this->db->bind(':end_date', $data['end_date']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }
    }
}