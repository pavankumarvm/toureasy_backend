<?php
class Database {
    private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "toureasy"; 
    
    public function getConnection(){		
      $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
      if($conn->connect_error){
        die("Error failed to connect to MySQL: " . $conn->connect_error);
      } else {
        // echo("Connection to database established!!!");
        return $conn;
      }
    }
}

// $database = new Database();
// $db = $database->getConnection();
?>