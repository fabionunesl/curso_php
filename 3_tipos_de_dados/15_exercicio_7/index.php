<?php

$pessoa = [
    'nome' => 'Fábio',
    'idade' => 38,
    'altura' => 1.87,
    'peso' => 94,
    'masculino' => true
];

$idade = $pessoa['idade'];
$maioridade = 18;

if($idade>=$maioridade) {
    echo "A pessoa tem $idade anos";
}