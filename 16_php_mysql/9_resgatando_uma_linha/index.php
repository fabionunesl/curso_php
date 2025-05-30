<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// CONTEUDO AULA
$id = 6;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$item = $resultado->fetch_row();

echo "<pre>";
print_r($item);
echo "</pre>";

$conn->close();
