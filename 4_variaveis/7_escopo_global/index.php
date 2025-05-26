<?php

// pode ser acessado o escopo global quando solicitado no local com a palavra GLOBAL

    $teste = "fabio";

    echo "$teste global 1 <br>";

// dentro de um if continua a ter acesso ao escopo global

    if (true){

        $teste = "Carol";
        echo "$teste local 1 <br>";
    }

    echo "$teste global 2 <br>";

    function funcao() {
        $teste = "Ben";
        echo "$teste local 2 <br>";
    }

    funcao();

    echo "$teste global 3 <br>";

    function testandoGlobal() {

        global $teste;

        $teste = "GASGYAGYSGAYS";

        echo "$teste local 3 <br>";

    }

    testandoGlobal();
    echo "$teste global 4 <br>";