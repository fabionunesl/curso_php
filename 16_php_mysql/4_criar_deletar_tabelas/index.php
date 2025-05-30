<?php

$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// $q = "CREATE TABLE IF NOT EXISTS itens (
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     nome VARCHAR(100) NOT NULL,
//     descricao TEXT NOT NULL
// )";

// $conn->query($q);

// $itens = [
//     [1, 'Abajur', 'abajur novo'],
//     [2, 'Caneta', 'Caneta Bic semi nova'],
//     [4, 'Teste', 'Testando auto increment'],
//     [5, 'Teclado', 'Teclado Microsoft'],
//     [7, 'Microfone', 'Microfone sem marca, muito barato'],
//     [8, 'Abajur muito novo', 'Este abajur é muito novo, raro e veio da China']
// ];



$conn->close();
