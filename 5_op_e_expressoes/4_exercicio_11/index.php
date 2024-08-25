<?php

    $a = "5";
    $b = 12;

    $operacao = $a * $b;
    echo $operacao;
    echo "<br>";

    echo gettype($operacao) . "<br>";
    echo gettype([]) . "<br>";
    echo gettype(12.2) . "<br>";
    echo gettype("Teste") . "<br>";
    echo gettype(12) . "<br>";
    echo gettype(null) . "<br>";
    echo gettype(true) . "<br>";
