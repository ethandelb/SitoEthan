<?php
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
$dbname = DB_NAME;

try{
    $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected sucessfully";
} catch(PDOException $e){
    echo"Connection failed: " . $e->getMessage();
}
?>