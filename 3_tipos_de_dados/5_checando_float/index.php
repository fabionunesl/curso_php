<?php

$a = "Teste";
$b = 12.8;

if(is_float($a)) {
    echo "Variável 1 é float! <br>";
}

if(is_float($b)) {
    echo "Variável 2 é float! <br>";
}

if(is_float(6565.63)) {
    echo "É float 4! <br>";
}

if(is_float("Teste 5")) {
    echo "É float 5! <br>";
}