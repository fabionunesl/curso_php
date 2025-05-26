<?php

if($_GET['nome']) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "NAOINSERIDO";
    $idade = "NAOINSERIDO";
}

?>

<h1>O nome inserido é <?= $nome ?>, e essa pessoa tem <?= $idade ?> anos</h1>