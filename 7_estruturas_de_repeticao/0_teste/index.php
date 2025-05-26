<?php

    $arr = [1, 12.23, "Fabio", [], "Olá!", true, (5<2), "batata"];
    
    $x= count($arr);
    echo count($arr);
    echo "<br>";

    $y = 0;

    while ($x > $y) {
        
        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;

    }