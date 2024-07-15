<?php 
try{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo database";

// we have to create object when we using pdo

$dbconn = new PDO("mysql:host=$servername; dbname = $dbname",$username,$password);

$insertquery = "INSERT INTO `studentstable`(Name,Age,Class,Gender) VALUES ('zahid','14','23','Male') ";

$dbconn->query($insertquery);


}
catch(PDOException $e){
    echo 'Error : '. $e->getMessage();
}

?>