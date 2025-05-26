<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5 / 2)) {
        echo "É um float";
    }

    echo "<br>";

    echo 5 . 2;

    echo "<br>";
    if(is_string(5 . 2)) {
        echo "É uma string";
    }

    echo "<br>";
    
    $nome = "Fábio";
    $sobreNome = "Lopes";
    $nomeCompleto = $nome . " " . $sobreNome;

    echo $nomeCompleto;

    echo "<br>";

    