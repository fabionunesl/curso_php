<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// CONTEUDO AULA
$nome = "Teste";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
} else {
    echo "Deletado com sucesso";
}

$conn->close();
