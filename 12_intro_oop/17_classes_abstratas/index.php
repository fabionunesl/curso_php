<?php

abstract class Fabio {

    public static function fabioClasse() {

        echo "Essa método é de uma classe abstrata <br> <br>";
    }
}

// $fab = new Fabio; // isso aqui é igual a estanciar classe

Fabio::fabioClasse();

class Carol extends Fabio {

    public function testeCarol() {
        echo "Teste método abastrato <br> <br>";
    }

}

$ben = new Carol;

$ben->testeCarol();
