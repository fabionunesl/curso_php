<?php

    if(10 > 2) {
        echo "Entrou no primeiro IF <br>";
        if("teste" == "teste") {
            echo "entrou no segundo IF <br>";
        } 
    } 

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    if(10 > 2) {
        echo "Entrou no primeiro IF 2<br>";
        if("teste" != "teste") {
            echo "entrou no segundo IF 2<br>";
        } else {
            echo "entrou no segundo else <br>";
        }
    } 

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    if(10 < 2) {
        echo "Entrou no primeiro IF 2<br>";
        if("teste" != "teste") {
            echo "entrou no segundo IF 2<br>";
        } else {
            echo "entrou no segundo else";
        }
    } else {
        echo "entrou no primeiro else <br>";
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $escopo = 10;

    if(10 > 2) {

        $escopo2 = 20;

        echo "Entrou no primeiro IF 2 <br>";
        if("teste" != "teste") {
            echo "entrou no segundo IF 2 <br>";
        } else {
            echo "entrou no segundo else <br>";
            echo $escopo;
            echo " " . $escopo2;
            echo "<br>";
        }
    } else {
        echo "entrou no primeiro else <br>";
    }

    echo $escopo2;
    echo "<br>";
    echo $escopo;