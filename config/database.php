<?php
$host = "localhost";
$db_name = "php_beginner_crud_level_1";
$usarname = "root";
$password = "";
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $usarname, $password);
}
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>