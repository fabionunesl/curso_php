<?php

    if(5 > 10 && 10 > 5) { // false e true
        echo "Entrou no if 1 <br>";
    }

    if(50 > 10 && 10 > 5) { // true e true
        echo "Entrou no if 2 <br>";
    }

    if(50 > 10 && 10 > 500) { // true e false
        echo "Entrou no if 3 <br>";
    }

    if(50 > 100 && 10 > 500) { // false e false
        echo "Entrou no if 4 <br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a > $b && $c == $d) { // true e true
        echo "Entrou no if 5 <br>";
    }

    if(true && true) { // true e true
        echo "Entrou no if 6 <br>";
    }

    if(false && true) { // false e true
        echo "Entrou no if 7 <br>";
    }

    if((true && true) && true ) { // true e true e true
        echo "Entrou no if 8 <br>";
    }