<?php

class Pessoa {
    function falar() {
        echo "Olá pessoal!";
    }
}

$fabio = new Pessoa();
$fabio->nome = "Fábio";
echo $fabio->nome;
echo '<br>';
$fabio -> falar();