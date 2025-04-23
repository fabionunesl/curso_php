<?php
function maiorElemento($array) {
    $maior = $array[0];
    foreach ($array as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    return $maior;
}