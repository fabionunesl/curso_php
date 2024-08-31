<?php

    function soma1($n1, $n2) {
        echo $n1 + $n2;
    }

    soma1(40, 43);
    echo "<br>";


    function soma($n1, $n2) {

        return $n1 + $n2;
        
    }

    echo soma(40, 100);
    echo "<br>";

    $x= soma(2, 4);
    echo $x;
    echo "<br>";
    $y = soma($x, 6);
    echo $y;
    echo "<br>";
