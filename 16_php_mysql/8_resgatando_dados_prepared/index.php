<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// CONTEUDO AULA

$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

echo "<pre>";
print_r($data);
echo "</pre>";
