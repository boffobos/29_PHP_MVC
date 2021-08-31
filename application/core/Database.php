<?php 
    class Database {
        private $dbhost = DB_HOST;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbhandler;
        private $statement;
        private $error;

        public function __construct(){
            $dsn = 'pgsql:host='. $this->dbhost . ';dbname=' . $this->dbname;

            try {
                $this->dbhandler = new PDO($dsn, $this->dbuser, $this->dbpass);
            } catch(PDOException $err) {
                $this->error = $err->getMessage();
                echo $this->error;
            }
        }

        public function query($sql){
            $this->statement = $this->dbhandler->prepare($sql);
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
    }