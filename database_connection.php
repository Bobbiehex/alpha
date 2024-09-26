<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "alpha_db";

try{
    $pdo = new PDO("mysql: host=$host; dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}catch(PDOEXCEPTION $ex){
    echo "Connection failed because: ".$ex;
}

$conn = mysqli_connect($host, $user, $password, $dbname);

?>
