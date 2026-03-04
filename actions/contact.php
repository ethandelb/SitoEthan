<?php
require_once("../config/config.php");
require_once("../DataBase/db.php");
if(isset($_POST["name"])){
    $nome = e($_POST["name"]);
    $email = e($_POST["email"]);
    $mess = e($_POST["message"]);
}

$stmt = $conn->prepare("INSERT INTO messaggi (nome, email, messaggio) VALUES (?, ?, ?)");
$stmt->execute([$nome,$email,$mess]);
