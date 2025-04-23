<?php
function somaElementos($array) {
    $soma = 0;
    foreach ($array as $numero) {
        $soma += $numero;
    }
    return $soma;
}