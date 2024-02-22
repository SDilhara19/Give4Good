 <?php
class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    public function __construct() {
        $dsn ='mysql:host='.$this->host.';dbname='.$this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        }
        catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(){
        return $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }


    //my modification
    public function beginTransaction() {
        return $this->dbh->beginTransaction();
    }

    public function commit() {
        return $this->dbh->commit();
    }

    public function rollBack() {
        return $this->dbh->rollBack();
    }

    //over

    //select a row from a given table given field
    public function selectOne($table, $field, $value, $limit = 1){
        $this->query("SELECT * FROM $table WHERE $field = :value LIMIT $limit");
        $this->bind(':value', $value);

        $row = $this->single(); 

        //Check row
        if ($this->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    // public function register($data){
    //     $this->db->query('INSERT INTO individualdonor (username, email, password, type, status) 
    //     VALUES (:username, :email, :password, :type, :status)');
    //     //Bind values
    //     $this->db->bind(':username', $data['username']);
    //     $this->db->bind(':email', $data['email']);
    //     $this->db->bind(':password', $data['password']);
    //     $this->db->bind(':type', $data['type']);
    //     $this->db->bind(':status', $data['status']);

    // }
    //delete a row from a given table and a given field
    public function delete($table, $field, $value, $limit = 1){
        $this->query("DELETE FROM $table WHERE $field = :value LIMIT $limit");
        $this->bind(':value', $value);
        return $this->execute();
    }


}