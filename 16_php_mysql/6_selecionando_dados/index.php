<?php
$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// ASSUNTO DA AULA

$q = "SELECT * FROM itens";
$result = $conn->query($q);
$conn->close();

//APENAS UM RESULTADO
$item = $result->fetch_assoc();

//TODOS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);
echo "<pre>";
print_r($itens);
echo "</pre>";
