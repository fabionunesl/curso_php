<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Fone de ouvido";
$descricao = "Novo";


$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

$stmt->bind_param("ss", $nome, $descricao); //s = string, i = interger, d = double

$stmt->execute();
$conn->close();
