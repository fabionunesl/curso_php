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

$id = 5;
$nome = "Scanner";
$descricao = "Estragado, devolver para cliente";
$stmt = $conn->prepare("UPDATE itens SET nome= :nome, descricao= :descricao WHERE id= :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
