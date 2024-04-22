<?php
class M_Super_Fundraiser
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function findCategory($category)
    {
        try {
            $this->db->query('SELECT category_id FROM category WHERE category_name= :category LIMIT 1');

            $this->db->bind(':category', $category);

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }
    }

    public function iFindDocuments($category)
    {

        try {
            $data = $this->findCategory($category);
      
            $category_id= $data[0]->category_id;
            

            $this->db->query('SELECT document, description FROM individual_fundraiser_documents WHERE category_id= :category_id');

            $this->db->bind(':category_id', $category_id);

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }


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