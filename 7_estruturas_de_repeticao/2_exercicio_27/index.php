<?php


    $arr =  ["Fabio", 1, 12.23, "Carol", (5 > 2), "Benjamim", "Eva", 23, true, "Lourenço"];

    $x = count($arr);
    $y = 0;

    while($x > $y) {

        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;
    }