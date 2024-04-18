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

            $this->db->query('UPDATE users SET phone = :phone, address =  :address, user_level = 2 WHERE id=:user_id');

            //bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':phone', $data['contact']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            }
            // First INSERT
            $this->db->query('UPDATE users_individual 
            SET fullname = :fullname, dob = :dob 
            WHERE user_id = :user_id;
            ');

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

            $this->db->query('INSERT INTO location(user_id, province, district, zip_code)
            VALUES (:user_id, :province, :district, :zipcode)');

            $this->db->bind(':user_id', $data['user_id']);
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

            if ($data['username']){
                $this->db->query('UPDATE users SET username = :username WHERE id=:user_id');
    
                //bind values
                $this->db->bind(':user_id', $data['user_id']);
                $this->db->bind(':username', $data['username']);
    
                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }
            }

            if ($data['profile_image']){
                $this->db->query('UPDATE users SET profile_image = :profile_image WHERE id=:user_id');
    
                //bind values
                $this->db->bind(':user_id', $data['user_id']);
                $this->db->bind(':profile_image', $data['profile_image']);
    
                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }
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

    }

    public function superRegisterOrg($data)
    {

        try {
            // Start a transaction
            $this->db->beginTransaction();

            $this->db->query('UPDATE users SET phone = :phone, address =  :address, user_level = 2 WHERE id=:user_id');

            //bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':phone', $data['contact']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            }
            // First INSERT
            $this->db->query('UPDATE users_organisation 
            SET regno  = :regNo, about = :about 
            WHERE user_id = :user_id;
            ');

            //bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':regNo', $data['regNo']);
            $this->db->bind(':about', $data['about']);
            

            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            }


            $this->db->query('INSERT INTO super_organisation (user_id, reg_date, reg_certificate, certification, status) VALUES (:user_id, :reg_date, :reg_certificate, :certification, "Pending")');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':reg_date', $data['doReg']);
            $this->db->bind(':reg_certificate', $data['reg_certificate']);
            $this->db->bind(':certification', $data['certification']);

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            $this->db->query('INSERT INTO location(user_id, province, district, zip_code)
            VALUES (:user_id, :province, :district, :zipcode)');

            $this->db->bind(':user_id', $data['user_id']);
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

            $this->db->query('INSERT INTO executive (user_id, fullname, designation, nic_no, address, email, contact, nic_front, nic_back)
            VALUES (:user_id, :fullname, :designation, :nic_no, :address, :email, :contact, :nic_front, :nic_back)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':fullname', $data['ex-fullname']);
            $this->db->bind(':designation', $data['ex-designation']);
            $this->db->bind(':nic_no', $data['ex-nicNo']);
            $this->db->bind(':address', $data['ex-address']);
            $this->db->bind(':email', $data['ex-email']);
            $this->db->bind(':contact', $data['ex-contact']);
            $this->db->bind(':nic_front', $data['ex-nic_front_image']);
            $this->db->bind(':nic_back', $data['ex-nic_back_image']);
            

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            $this->db->query('INSERT INTO treasurer(user_id, fullname, designation, nic_no, address, email, contact, nic_front, nic_back)
            VALUES (:user_id, :fullname, :designation, :nic_no, :address, :email, :contact, :nic_front, :nic_back)');

            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':fullname', $data['tr-fullname']);
            $this->db->bind(':designation', $data['tr-designation']);
            $this->db->bind(':nic_no', $data['tr-nicNo']);
            $this->db->bind(':address', $data['tr-address']);
            $this->db->bind(':email', $data['tr-email']);
            $this->db->bind(':contact', $data['tr-contact']);
            $this->db->bind(':nic_front', $data['tr-nic_front_image']);
            $this->db->bind(':nic_back', $data['tr-nic_back_image']);
            

            if (!$this->db->execute()) {
                // Rollback the transaction if the second INSERT fails
                $this->db->rollBack();
                return false;
            }

            if ($data['username']){
                $this->db->query('UPDATE users SET username = :username WHERE id=:user_id');
    
                //bind values
                $this->db->bind(':user_id', $data['user_id']);
                $this->db->bind(':username', $data['username']);
    
                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }
            }

            if ($data['logo']){
                $this->db->query('UPDATE users SET profile_image = :logo WHERE id=:user_id');
    
                //bind values
                $this->db->bind(':user_id', $data['user_id']);
                $this->db->bind(':logo', $data['logo']);
    
                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }
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

    public function UpdateLoggin($user_id)
    {
        var_dump($user_id);
        $this->db->query('UPDATE users
        SET last_login_time = CURRENT_TIMESTAMP
        WHERE id = :user_id;');

        //bind values
        $this->db->bind(':user_id', $user_id);

        if (!$this->db->execute()) {
            // Rollback the transaction if the first INSERT fails
            $this->db->rollBack();
            return false;
        }
        else{
            return true;
        }
    }

    public function basicData($user_id){
        try{
            $this->db->query("SELECT ui.dob, ui.fullname, u.Address, u.phone
            FROM users_individual ui
            JOIN users u ON ui.user_id = u.id
            WHERE u.id = :user_id;
            ");
    
            $this->db->bind(':user_id', $user_id);
            // $rows = $this->db->resultSet();
    
            $row = $this->db->resultSet();
    
            //Check row
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            
            error_log('Error in getAFundraiser: ' . $e->getMessage());
            $err = "Error: " . $e->getMessage();
            return $err;
        }
    }

}







