<?php
class M_user
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function findbyEmail($email)
    {
        $row = $this->db->selectOne('users', 'email', $email);

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function findbyRegNo($regno)
    {
        $row = $this->db->selectOne('users_organisation', 'regno', $regno);

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function findbyUsername($username)
    {
        $row = $this->db->selectOne('users', 'username', $username);

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        if ($data['type'] == 'organisation') {

            $this->db->query('INSERT INTO users (username, email, password, type, profile_image) 
            VALUES (:username, :email, :password, :type, "/public/Assets/images/default-org-profile.png")');
            //Bind values
            $this->db->bind(':username', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':type', $data['type']);
        } else {
            $this->db->query('INSERT INTO users (username, email, password, type) 
            VALUES (:username, :email, :password, :type)');

            //Bind values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':type', $data['type']);
        }



        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function validateUser($usernameOrEmail)
    {
        if ($this->findbyUsername($usernameOrEmail)) {
            return $this->findbyUsername($usernameOrEmail);
        } elseif ($this->findbyEmail($usernameOrEmail)) {
            return $this->findbyEmail($usernameOrEmail);
        }
    }

    public function superRegister($data)
    {

        try {
            // Start a transaction
            $this->db->beginTransaction();

            // First INSERT
            $this->db->query('INSERT INTO users_individual (user_id, fullname, dob) VALUES  (:user_id, :fullname, :dob)');

            //bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':fullname', $data['fullname']);
            $this->db->bind(':dob', $data['dob']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            }


            $this->db->query('INSERT INTO super_individual (user_id, nic_no, nic_front, nic_back, status) VALUES (:user_id, :nicNo, :nic_front, :nic_back, "Pending")');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':nicNo', $data['nicNo']);
            $this->db->bind(':nic_front', $data['nic_front_image']);
            $this->db->bind(':nic_back', $data['nic_back_image']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            $this->db->query('INSERT INTO location(user_id, address, province, district, zip_code)
            VALUES (:user_id, :address, :province, :district, :zipcode)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':province', $data['province']);
            $this->db->bind(':district', $data['district']);
            $this->db->bind(':zipcode', $data['zipcode']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            $this->db->query('INSERT INTO bank_details (user_id, account_no, acc_holder, bank_code, bank_name, branch_code, branch_name, bank_pbook)
            VALUES (:user_id, :account_no, :acc_holder, :bankcode, :bank, :branchcode, :branch, :bank_pbook)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':account_no', $data['accountNo']);
            $this->db->bind(':acc_holder', $data['name']);
            $this->db->bind(':bankcode', $data['bankcode']);
            $this->db->bind(':bank', $data['bank']);
            $this->db->bind(':branchcode', $data['branchcode']);
            $this->db->bind(':branch', $data['branch']);
            $this->db->bind(':bank_pbook', $data['pass_book']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            // If both INSERTs succeed, commit the transaction
            $this->db->commit();

            return true;
        } catch (PDOException $e) {
            // If any exception occurs, rollback the transaction
            $this->db->rollBack();
            echo "Error: " . $e->getMessage();
            return false;
        }

        // $this->db->query('INSERT INTO users_individual (user_id, dob, fullname) 
        // VALUES ("37", "12-12-11", "dg")');

        // if ($this->db->execute()) {
        //     return true;
        // } else {
        //     return false;
        // }

        // $this->db->query('INSERT INTO super_individual(user_id, nic_no, nic_front, nic_back, status) 
        // VALUES ("37", "1211", "dg", "dsssan", "Pending")');

        // // $this->db->bind(':user_id', $data['user_id']);
        // // $this->db->bind(':fullname', $data['fullname']);
        // // $this->db->bind(':nicNo', $data['nicNo']);
        // // $this->db->bind(':nic_front', $data['nic_front_image']);
        // // $this->db->bind(':nic_back', $data['nic_back_image']);
        // // $this->db->bind(':dob', $data['dob']);
        // // //Bind values
        // // $this->db->bind(':user_id', $data['user_id']);
        // // $this->db->bind(':title', $data['story_title']);
        // // $this->db->bind(':description', $data['story_description']);
        // // $this->db->bind(':contact', $data['phone']);
        // // $this->db->bind(':email', $data['email']);
        // // $this->db->bind(':image', $data['story_image']);

        // if ($this->db->execute()) {
        //     return true;
        // } else {
        //     return false;
        // }
    }



    public function login($usernameOrEmail, $password)
    {

        $row = $this->validateUser($usernameOrEmail);
        if ($row == false)
            return false;

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            $this->db->query('UPDATE users SET last_login_time = NOW() WHERE id = :user_id');

            $this->db->bind(':user_id', $row->id);

            return $row;
        } else {
            return false;
        }

    }





}

