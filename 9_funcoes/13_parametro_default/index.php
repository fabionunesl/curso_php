<?php

    function teste($a = "teste") {

        echo "O valor de A é: $a <br>";
    }

    teste();
    teste("Fabio");
    
    
    function testando($b, $a = "x") {

        echo "O valor de A é: $a, e o valor de $b é: <br>";
    }

  
testando("1");
testando("1","2" );
