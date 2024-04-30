<?php
class M_Admin_Individual
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function viewPending()
    {
        $this->db->query('SELECT super_individual.*, users.* , bank_details.*
        FROM super_individual
        JOIN users ON super_individual.user_id = users.id
        LEFT JOIN bank_details ON super_individual.user_id = bank_details.user_id
        WHERE super_individual.status = "pending";');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewActive()
    {
        $this->db->query('SELECT super_individual.*, users.*, bank_details.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id
        LEFT JOIN bank_details ON super_individual.user_id = bank_details.user_id
        WHERE super_individual.status = "active";');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewDeactive()
    {
        $this->db->query('SELECT super_individual.*, users.* , bank_details.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id 
        LEFT JOIN bank_details ON super_individual.user_id = bank_details.user_id
        WHERE super_individual.status = "deactive";');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function viewAll()
    {
        $this->db->query('SELECT super_individual.*, users.* ,bank_details.*
        FROM super_individual 
        JOIN users ON super_individual.user_id = users.id
        LEFT JOIN bank_details ON super_individual.user_id = bank_details.user_id;');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function activateSuperIndividual($user_id)
    {
        $this->db->query('UPDATE super_individual SET status = "Active"
        WHERE user_id = :user_id;');
    
        $this->db->bind(':user_id', $user_id);
    
=======
    public function activateSuperIndividual($id)
    {
        $this->db->query('UPDATE super_individual SET status = "Active"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

>>>>>>> main
=======
    public function activateSuperIndividual($user_id)
    {
        $this->db->query('UPDATE super_individual SET status = "Active"
        WHERE user_id = :user_id;');
    
        $this->db->bind(':user_id', $user_id);
    
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
    
    public function deactivateSuperIndividual($user_id)
    {
        $this->db->query('UPDATE super_individual SET status = "Deactive"
        WHERE user_id = :user_id;');
    
        $this->db->bind(':user_id', $user_id);
    
=======

    public function deactivateSuperIndividual($id)
    {
        $this->db->query('UPDATE super_individual SET status = "Deactive"
        WHERE id = :id;');

        $this->db->bind(':id', $id);

>>>>>>> main
=======
    
    public function deactivateSuperIndividual($user_id)
    {
        $this->db->query('UPDATE super_individual SET status = "Deactive"
        WHERE user_id = :user_id;');
    
        $this->db->bind(':user_id', $user_id);
    
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
>>>>>>> main
=======
    
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

    public function viewIndividuals()
    {
        $this->db->query('SELECT users_individual.*, users.*
        FROM users_individual
        JOIN users ON users_individual.user_id = users.id;');

        //Check row
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

    public function viewProfile($id, $userLevel){
   
      if ($userLevel == 2) {
         $this->db->query('SELECT users.*,bank_details.*, users_individual.*,super_individual.*
       FROM users
       JOIN bank_details ON users.id=bank_details.user_id
       JOIN users_individual ON users.id=users_individual.user_id
       JOIN super_individual ON users.id=super_individual.user_id
       WHERE users.id=:user_id');


         $this->db->bind(':user_id', $id);

         $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
            return $row;
         } else {
            return false;
         }
      } else if ($userLevel == 1) {
         $this->db->query('SELECT users.*, users_individual.*
       FROM users
       JOIN users_individual ON users.id=users_individual.user_id
       WHERE users.id=:user_id');


         $this->db->bind(':user_id', $id);

         $row = $this->db->resultSet();

         //Check row
         if ($this->db->rowCount() > 0) {
            return $row;
         } else {
            return false;
         }
      }


    }
<<<<<<< HEAD
=======
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
}
?>