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
        VALUES (:username, :email, :password, :type, "public/Assets/images/default-org-profile.webp")');

            $this->db->bind(':username', $data['name']);
            $this->db->bind(':email', $data['email']);
            // $this->db->bind(':regno', $data['regno']);
// $this->db->bind(':website', $data['website']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':type', $data['type']);
            // $this->db->query('SET @last_user_id = LAST_INSERT_ID()');
            // $this->db->query('INSERT INTO organisation_users (user_id, regno, website)
            // VALUES (@last_user_id, :regno, :website)');
        } 
        else {
            $this->db->query('INSERT INTO users (username, email, password, type) 
        VALUES (:username, :email, :password, :type)');
            //Bind values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            // $this->db->bind(':regno', $data['regno']);
            // $this->db->bind(':website', $data['website']);
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

    public function superRegister($data)
    {
        // var_dump("d");
        // var_dump($data);
        // $this->db->query('START TRANSACTION;


        // INSERT INTO users_individual (user_id, fullname, dob)
        // VALUES (:user-id, :fullname, :dob);
        
        // INSERT INTO super_individual (user_id, nic_no, nic_front, nic_back, status) 
        // VALUES (:user-id, :nicNo, :nic_front, :nic_back, "Pending");
        
        // INSERT INTO bank_details (user_id, account_no, acc_holder, bank_code, bank_name, branch_code, branch_name, bank_pbook)
        // VALUES (:user_id, :account_no, :acc_holder, :bankcode, :bank, :branchcode, :branch, :bank_pbook);
        
        // INSERT INTO location (user_id, address, province, district, zip_code)
        // VALUES (:user-id, :address, :province, :district, :zipcode);
        
        // COMMIT;
        // ');
        try{
            $this->db->query('INSERT INTO location(user_id, address, province, district, zip_code)
        VALUES (:user-id, :address, :province, :district, :zipcode);');
            //Bind values
            $this->db->bind(':user_id', $data['user_id']);
            // $this->db->bind(':fullname', $data['fullname']);
            // $this->db->bind(':nicNo', $data['nicNo']);
            // $this->db->bind(':nic_front', $data['nic_front_image']);
            // $this->db->bind(':nic_back', $data['nic_back_image']);
            // $this->db->bind(':dob', $data['dob']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':province', $data['province']);
            $this->db->bind(':district', $data['district']);
            $this->db->bind(':zipcode', $data['zipcode']);
            // $this->db->bind(':contact', $data['contact']);
            // $this->db->bind(':account_no', $data['accountNo']);
            // $this->db->bind(':acc_holder', $data['name']);
            // $this->db->bind(':bankcode', $data['bankcode']);
            // $this->db->bind(':bank', $data['bank']);
            // $this->db->bind(':branchcode', $data['branchcode']);
            // $this->db->bind(':branch', $data['branch']);
            // $this->db->bind(':bank_pbook', $data['pass_book']);
        



        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        }
        catch(Error $e){
            echo "Caught exception: " . $e->getMessage();
        }
    }



}

