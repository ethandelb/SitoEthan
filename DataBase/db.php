<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

try{
    $conn = new PDO("mysql:host=$servername;dbname=,$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected sucessfully";
} catch(PDOException $e){
    echo"Connection failed: " . $e->getMessage();
}
?>