<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// CONTEUDO AULA

$id = 9;
$nome = "Mouse";
$descricao = "Mouse, semi novo devolvido do cliente";

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
} else {
    echo "atualizado com sucesso";
}
