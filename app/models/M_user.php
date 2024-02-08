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
            $this->db->query('INSERT INTO users (username, email, password, type) 
        VALUES (:username, :email, :password, :type)');

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



}

?>