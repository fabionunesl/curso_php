<?php

class Cachorro {

    public $nome;
    public $raca;
    public $cor;

    function __construct($nome, $raca, $cor){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->cor = $cor;
    }

    public function apresentar() {
        echo "O nome do cachorro é $this->nome da raça $this->raca
        tendo a maior parte do pelo da cor $this->cor <br> <br>";

    }
}


$dog = new Cachorro("Levi", "pincher", "marrom");
$dog->apresentar();

$nome = "Charlotte";
$cor = "marrom";
$raca = "pincher";

$charlotte = new Cachorro($nome, $raca, $cor);
$charlotte->apresentar();