<?php 
class db {

   private $host = "localhost";
   private $username = "root";
   private $database = "login";
   private $password = "";
   protected $db;

   public function __construct(){
    try {
        
        /*
            * Create database connection
        */ 

        $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

    } catch(PDOException $e){
        echo "Connection Problem: ". $e->getMessage();

    }

   }

}


 ?>