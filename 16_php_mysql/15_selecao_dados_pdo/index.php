<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

// ASSUNTO AULA

$id = 6;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);
$stmt->execute();

// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($data);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($data);
