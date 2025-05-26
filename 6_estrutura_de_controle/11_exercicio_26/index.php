<?php

    $v_carro = 40;
    $limite_v = 40;

    if($v_carro < $limite_v) {

        echo "Velocidade correta <br>";

    } else if($v_carro == $limite_v) {

        echo "Cuidado para não passar da velocidade <br>";
    
    } else {

        echo "Você passou do limite de velocidade, foi multado <br>";

    }