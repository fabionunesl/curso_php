<?php

   $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $n = 0;

    while($n < count($arr)) {

        $numeroAtual = $arr[$n];
        
        if($numeroAtual == 30 || $numeroAtual == 40){
            $n++;
            continue;            
        }

        echo "Elemento: $numeroAtual <br> ";

        $n++;
    }
