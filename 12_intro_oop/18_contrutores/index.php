<?php

class Carro {

    //essas são as propriedades da classe
    public $portas;
    public $cor;
    public $marca;

        //isso é o MÉTODO construtor em PARÂMETROS
    function __construct($portas, $cor, $marca) {
        //aqui esta atribuindo os PARÂMETROS às PROPRIEDADES
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }

    public function apresentar() {
        echo "Olá, eu dou o carro da marca $this->marca e tenho a cor $this->cor <br> <br>";
    }
}

$fiatUno = new Carro(4, "bordo", "Fiat");

echo "O carro é da marca $fiatUno->marca e tem a cor $fiatUno->cor <br>";

$celta = new Carro(4, "branco", "GM");

echo "O carro é da marca $celta->marca, tem $celta->portas portas e é da cor $celta->cor <br>";

$fiatUno->apresentar();
$celta->apresentar();