<?php

    $x = 4;
    $limite = 30;
    $parar = 24;

    while($x <= $limite) {

        echo "Valor de X é: $x <br>";

        if($x === $parar) {
            echo "Parando o loop <br>";
            break;
        }

        $x += 2;

    }

echo "loope parado!";