<?php

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1, 2, 3];

    echo "<br>";
    echo $a;
    echo "<br>";
    if( $a === 1) {
        echo " Operador A é inteiro!";
    }

    echo "<br>";
    echo $b;
    echo "<br>";
    if( $b === 12) {
        echo " Operador B é inteiro!";
    }

    echo "<br>";
    echo $c;
    echo "<br>";
    if( $c === 1) {
        echo " Operador C é inteiro!";
    }

    echo "<br>";
    echo $d;
    echo "<br>";
    if( $d === 1) {
        echo " Operador D é inteiro!";
    }


    echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";

    $a = (float) "testando";
    echo $a;
     echo "<br>";
    $b = (float) 12.9;
    echo $b;
     echo "<br>";
    $c = (float) true;
    echo $c;
     echo "<br>";
    $d = (float) [1, 2, 3];
    echo $d;