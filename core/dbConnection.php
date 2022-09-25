<?php

$servername = "localhost";
$dBUsername = "bogdonet_adminElBigote";
$dBPassword = "Djbobo1996";
$dBName = "bogdonet_ElBigote";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}


// -----
// class Project{

//   public static function connection() {

		// $pdo = new PDO("mysql:host=localhost; dbname=bogdonet_ElBigote; charset=utf8", "bogdonet_adminElBigote", "Djbobo1996");

// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 		return $pdo;
//   }

//   protected function syntax($query, $params = []) {

// 		$st = self::connection()->prepare($query);

// 		if ($st->execute($params)) {

// 			if (explode(' ', $query)[0] == 'SELECT') {

// 				if ($st->rowCount() > 0) {

// 				  return $st->fetchAll(PDO::FETCH_ASSOC);
// 				}else{

//           return false;   
// 		      }
//         }
//       return true;

// 		  } else {

// 		return false;
// 		}
//   }
// -----
  // private $servername;
    // private $username;
    // private $password;
    // private $dbname;
    // private $charset;
  
    // public function connect(){
    //   $this->servername = "localhost";
    //   $this->username = "bogdonet_adminElBigote";
    //   $this->password = "Djbobo1996";
    //   $this->dbname = "bogdonet_ElBigote";
    //   $this->charset = "utf8mb4";
  
    //   try{
    //     $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
    //     $pdo = new PDO($dsn, $this->username, $this->password);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     return $pdo;
    //   }catch(PDOException $e){
    //     echo "Connection Failed: " .$e->getMessage();
    //   }
      
  
  
      
    // }
  // }