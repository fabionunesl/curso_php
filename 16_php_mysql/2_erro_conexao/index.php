<?php
error_reporting(E_ALL); // Reporta todos os erros
ini_set('display_errors', 1); // Exibe os erros no navegador
ini_set('log_errors', 1); // Opcional: registra erros em um arquivo de log

$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp"; // Banco de dados errado propositalmente

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão!<br>";
    echo "Código do erro: " . $conn->connect_errno . "<br>";
    echo "Mensagem: " . $conn->connect_error;
    exit;
}

echo "Conectado com sucesso!";
