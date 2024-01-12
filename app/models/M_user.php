<?php
class M_User {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }


    public function findbyEmail($email){
        $row = $this->db->selectOne('users', 'email', $email);
 
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function findbyUsername($username){
        $row = $this->db->selectOne('users', 'username', $username);
 
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function register($data){
        $this->db->query('INSERT INTO users (username, email, password, type) 
        VALUES (:username, :email, :password, :type)');
        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':type', $data['type']);


        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function validateUser($usernameOrEmail){
        if ($this->findbyUsername($usernameOrEmail))
        {
            return $this->findbyUsername($usernameOrEmail);
        }
        elseif ($this->findbyEmail($usernameOrEmail))
        {
            return $this->findbyEmail($usernameOrEmail);
        } 
    }

    public function login($usernameOrEmail, $password){

        $row = $this->validateUser($usernameOrEmail);
        if($row == false) return false;

        $hashedPassword = $row->password;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
        
    }

   

}

?>