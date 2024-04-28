<?php

class M_Profile
{
   private $db;
   public function __construct()
   {
      $this->db = new Database;
   }

   public function getUserDetails($id, $userLevel)
   {

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

   public function editUserDetails($id, $userLevel)
   {

      if ($userLevel == 2) {
         $this->db->query('SELECT users.*,bank_details.*, users_individual.*,super_individual. *
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

   public function getOrgDetails($id, $userLevel)
   {
      if ($userLevel == 2) {
         $this->db->query('SELECT users.*,uo.*,bd.*,so.*
           FROM users
       JOIN bank_details bd ON users.id=bd.user_id
       JOIN users_organisation uo ON users.id=uo.user_id
       JOIN super_organisation so ON users.id=so.user_id
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
         $this->db->query('SELECT users.*, users_organisation.*
       FROM users
       JOIN users_organisation ON users.id=users_organisation.user_id
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

   public function editOrgDetails($id, $userLevel)
   {
      if ($userLevel == 2) {
         $this->db->query('SELECT users.*,uo.*,bd.*,so.*
           FROM users
       JOIN bank_details bd ON users.id=bd.user_id
       JOIN users_organisation uo ON users.id=uo.user_id
       JOIN super_organisation so ON users.id=so.user_id
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
   public function getExecutiveDetails($id)
   {
      $this->db->query('SELECT 
          users.*,
        e.user_id AS executive_user_id, 
        e.fullname AS executive_fullname, 
        e.designation AS executive_designation, 
        e.nic_no AS executive_nic_no, 
        e.address AS executive_address, 
        e.email AS executive_email, 
        e.contact AS executive_contact, 
        e.nic_front AS executive_nic_front, 
        e.nic_back AS executive_nic_back
           FROM users
       JOIN executive e ON users.id=e.user_id
       WHERE users.id=:user_id'
         //  
      );


      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getTreasurerDetails($id)
   {
      $this->db->query('SELECT 
          users.*,
        t.user_id AS treasurer_user_id, 
        t.fullname AS treasurer_fullname, 
        t.designation AS treasurer_designation, 
        t.nic_no AS treasurer_nic_no, 
        t.address AS treasurer_address, 
        t.email AS treasurer_email, 
        t.contact AS treasurer_contact, 
        t.nic_front AS treasurer_nic_front, 
        t.nic_back AS treasurer_nic_back
           FROM users
       JOIN treasurer t ON users.id=t.user_id
       WHERE users.id=:user_id'
         //  
      );


      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }
   public function getSecretaryDetails($id)
   {
      $this->db->query('SELECT 
          users.*,
        s.user_id AS secretary_user_id, 
        s.fullname AS secretary_fullname, 
        s.designation AS secretary_designation, 
        s.nic_no AS secretary_nic_no, 
        s.address AS secretary_address, 
       s.email AS secretary_email, 
        s.contact AS secretary_contact, 
        s.nic_front AS secretary_nic_front, 
        s.nic_back AS secretary_nic_back
           FROM users
       JOIN secretary s ON users.id=s.user_id
       WHERE users.id=:user_id'
         //  
      );


      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getUserDonations($id)
   {
      $this->db->query("SELECT DISTINCT dp.*, f.title
        FROM donationpayments dp
        JOIN fundraiser f ON dp.fundraiser_id = f.fundraiser_id
        WHERE dp.user_id =:user_id");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getUserStories($id)
   {
      $this->db->query("SELECT s.*, u.*
        FROM stories s
        JOIN users u ON s.user_id=u.id
        WHERE s.user_id =:user_id ");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getUserComplaints($id)
   {
      $this->db->query("SELECT DISTINCT f_c.*, u.*
        FROM users u
        JOIN fundraiser_complain f_c ON f_c.complain_userID = u.id
        WHERE f_c.complain_userID =:user_id");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getUserFundraisers($id)
   {
      $this->db->query("SELECT DISTINCT f.*, u.*
        FROM users u
        JOIN fundraiser f ON f.user_id = u.id
        WHERE f.user_id =:user_id");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getUserMerchandises($id)
   {
      $this->db->query("SELECT DISTINCT m.*, u.*,f.*
        FROM fundraiser f
        JOIN merchandise m ON m.id = f.user_id
        JOIN users u ON f.user_id = u.id
        WHERE f.user_id =:user_id");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }

   public function getSubPayments($id)
   {
      $this->db->query("SELECT DISTINCT f.*, u.*
        FROM users u
        JOIN fundraiser f ON f.user_id = u.id
        WHERE f.user_id =:user_id");

      $this->db->bind(':user_id', $id);

      $row = $this->db->resultSet();

      //Check row
      if ($this->db->rowCount() > 0) {
         return $row;
      } else {
         return false;
      }
   }


   public function updateData($data)
   {
      try {
         // $this->db->beginTransaction();
         $this->db->query("UPDATE users SET username = :username, email = :email, phone = :phone, Address = :address, profile_image =:profile_image WHERE id = :user_id;");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':username', $data['username']);
         $this->db->bind(':address', $data['address']);
         $this->db->bind(':phone', $data['contact']);
         $this->db->bind(':email', $data['email']);
         $this->db->bind(':profile_image', $data['profile_image']);

         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }


         $this->db->query("UPDATE bank_details SET account_no = :account_no, acc_holder = :acc_holder, bank_code = :bank_code,bank_name = :bank_name, bank_pbook = :bank_pbook, branch_code = :branch_code, branch_name = :branch_name WHERE user_id = :user_id;");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':account_no', $data['acc_no']);
         $this->db->bind(':acc_holder', $data['accountname']);
         $this->db->bind(':bank_code', $data['bankcode']);
         $this->db->bind(':bank_name', $data['bankname']);
         $this->db->bind(':bank_pbook', $data['pbook_img']);
         $this->db->bind(':branch_code', $data['branchcode']);
         $this->db->bind(':branch_name', $data['branchname']);

         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }

         $this->db->query("UPDATE executive SET fullname = :fullname, designation = :designation, nic_no = :nic_no, address = :address, email = :email, contact = :contact WHERE user_id = :user_id;");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':fullname', $data['presidentname']);
         $this->db->bind(':designation', $data['presidentdest']);
         $this->db->bind(':nic_no', $data['presidentnic']);
         $this->db->bind(':email', $data['presidentemail']);
         $this->db->bind(':contact', $data['presidentcontact']);

         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }

        $this->db->query("UPDATE treasurer SET fullname = :fullname, designation = :designation, nic_no = :nic_no, address = :address, email = :email, contact = :contact WHERE user_id = :user_id;");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':fullname', $data['treasurername']);
         $this->db->bind(':designation', $data['treasurerdest']);
         $this->db->bind(':nic_no', $data['treasurernic']);
         $this->db->bind(':email', $data['treasureremail']);
         $this->db->bind(':contact', $data['treasurercontact']);

         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }

         $this->db->query("UPDATE secretary SET fullname = :fullname, designation = :designation, nic_no = :nic_no, address = :address, email = :email, contact = :contact WHERE user_id = :user_id;");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':fullname', $data['secretaryname']);
         $this->db->bind(':designation', $data['secretarydest']);
         $this->db->bind(':nic_no', $data['secretaryrnic']);
         $this->db->bind(':email', $data['secretaryremail']);
         $this->db->bind(':contact', $data['secretarycontact']);

         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }

        $this->db->query("UPDATE users_organisation SET reg_no = :reg_no WHERE user_id = :user_id");
         $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':reg_no', $data['regno']);
        
         if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
         }

      }catch (PDOException $e) {
            // If any exception occurs, rollback the transaction
            $this->db->rollBack();
            echo "Error: " . $e->getMessage();
            return false;
        }

   }

   // public function searchForFundraiser($string){
   //      if (empty($string)) {
   //          return []; 
   //      }
   //      $this->db->query("SELECT * from fundraiser 
   //                        INNER JOIN users ON users.id = fundraiser.user_id 
   //                        WHERE title LIKE '%$string%'");
   //      $searchResults = $this->db->resultSet();

   //      return $searchResults;
   //  }
}