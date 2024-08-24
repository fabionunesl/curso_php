<?php

if(is_int(5)) { // é um inteiro entra na chave
    echo "É um inteiro 1 <br>";
}

if(is_int("Não é inteiro")) { //nao é inteiro, nao entra na chave
    echo "É um inteiro 2 <br>";
}

$a = 10;

if(is_int($a)) { 
    echo "É um inteiro 3  <br>";
}