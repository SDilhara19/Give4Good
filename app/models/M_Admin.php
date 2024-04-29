<?php
class M_Admin
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function viewPendings()
    {
        return 0;

    }





    public function viewDonations()
    {
        $this->db->query('SELECT donationpayments.*, users.username 
        FROM donationpayments 
        JOIN users 
        ON donationpayments.user_id = users.id;
        ');

        $row = $this->db->resultSet();
    
        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function addDocument($category, $documentName)
    {
        $this->db->query('Update tablename');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function removedoc($user, $category, $document)
    {

        $category_id = $this->db->selectOne2('category', 'category_id', 'category_name', $category);

        $query1 = "UPDATE individual_fundraiser_documents SET deleted_doc = 1 WHERE category_id = :category_id AND document = :document";
        $query2 = "UPDATE organisation_fundraiser_documents SET deleted_doc = 1 WHERE category_id = :category_id AND document = :document";
        if ($user == 'individual') {
            $this->db->query($query1);
            $this->db->bind(':category_id', $category_id->category_id);
            $this->db->bind(':document', $document);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();


                return false;
            }
            return true;
        } else if ($user == 'organisation') {
            $this->db->query($query2);

            $this->db->bind(':category_id', $category_id->category_id);
            $this->db->bind(':document', $document);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            } else {
                return true;
            }
        }

    }

    public function adddoc($user, $category, $data)
    {

        $category_id = $this->db->selectOne2('category', 'category_id', 'category_name', $category);

        $query1 = "INSERT INTO individual_fundraiser_documents (category_id, document, description, document_name) 
        VALUES (:category_id, :document, :description, :document_name)";

        $query2 = "INSERT INTO organisation_fundraiser_documents (category_id, document, description, document_name) 
        VALUES (:category_id, :document, :description, :document_name)";
        $document = str_replace(array("'", '"', ' '), '', htmlspecialchars_decode($data['doc_name']));
        $document_name = htmlspecialchars_decode($data['doc_name']);

        if ($user == 'individual') {
            $this->db->query($query1);
            $this->db->bind(':category_id', $category_id->category_id);
            $this->db->bind(':document', $document);
            $this->db->bind(':description', $data['doc_description']);
            $this->db->bind(':document_name', $document_name);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();


                return false;
            } else {
                return true;
            }
        } else if ($user == 'organisation') {
            $this->db->query($query2);

            $this->db->bind(':category_id', $category_id->category_id);
            $this->db->bind(':document', $document);
            $this->db->bind(':description', $data['doc_description']);
            $this->db->bind(':document_name', $document_name);


            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            } else {
                return true;
            }
        }

    }

    public function viewComplaints()
    {
        $this->db->query('SELECT fundraiser_complain.*, users.*
        FROM fundraiser_complain 
        JOIN users ON fundraiser_complain.user_id = users.id 
        JOIN fundraiser ON fundraiser_complain.fundraiser_id = fundraiser.fundraiser_id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function viewContributions()
    {
        $this->db->query('SELECT donationpayments.*, users.username 
        FROM donationpayments 
        JOIN users 
        ON donationpayments.user_id = users.id;
        ');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    public function IndSignup() {
        $this->db->query("SELECT users.* FROM users WHERE users.type='individual' AND users.user_level = '1' ORDER BY users.signup_time DESC LIMIT 4");
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
    }

    public function OrgSignup() {
        $this->db->query("SELECT users.* FROM users WHERE users.type='organisation' AND users.user_level = '1' ORDER BY users.signup_time DESC LIMIT 4");
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
    }

    public function Fundraiser() {
        $this->db->query("SELECT fundraiser.* FROM fundraiser ORDER BY fundraiser.created_date DESC LIMIT 4");
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
    }

    public function Merch() {
        $this->db->query("SELECT merchandise.* FROM merchandise LIMIT 4");
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
    }

    public function Donation() {
        $this->db->query("SELECT merchandise.* FROM merchandise LIMIT 4");
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
    }

    public function Story() {
        $this->db->query("SELECT stories.* FROM stories WHERE stories.status='Active' LIMIT 4");
        
        
        $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
             return $row;
            } else {
             return false;
            }
        }


}
