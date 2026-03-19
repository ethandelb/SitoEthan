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
$body = "Nome: $nome\nEmail: $email\nMessaggio:\n$mess";
$subject = "Nuovo messaggio ricevuto";
mail(SITE_EMAIL, $subject,$body);

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>