<?php

    $a = 55;
    $b = 60.5;
    $c = "Fabio";


    if(is_int($a) || is_float($a)) {
        $valor = $a * 2;
        if($valor > 100) { 
            echo "Valor maior que 100 <br>";
        } else {
            echo "Valor nao é maior que 100 <br>";
        }
    } else {
        if(is_string($a)) {
            echo $a;
        }   
    }

    echo "<br>";
    echo "<br>";

    if(is_int($c) || is_float($c)) {
        $valor1 = $c * 2;
        if($valor1 > 100) { 
            echo "Valor maior que 100 <br>";
        } else {
            echo "Valor nao é maior que 100 <br>";
        }
    } else {
        if(is_string($c)) {
            echo $c;
        }   
    }