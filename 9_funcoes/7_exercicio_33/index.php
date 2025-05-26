<?php

function cadastro($nome, $idade) {

    if(is_string($nome) && is_int($idade)) {
        echo "Olá, eu sou $nome e tenho $idade anos <br>";
    } else {
        echo " informe os parâmetros corretos";
    }
   
}

cadastro("Fábio", 38);