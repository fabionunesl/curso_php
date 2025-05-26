<?php

class Calculadora {

    public $a;
    public $b;

    public function somar($a, $b) {
        return $a + $b;
    }

    public function subtrair($a, $b) {
        return $a - $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: divisão por zero";
        } 
        if ($a ==0) {
            return "Erro: Dividendo igual a zero";
        } 
        return $a / $b;
    }

    public function multiplicacao($a, $b) {
        return $a * $b;
    }

}

$calc = new Calculadora();

echo "soma: " . $calc->somar(10, 5) . "<br><br>";
echo "Subtração: " . $calc->subtrair(10, 5) . "<br> <br>";
echo "Divisão: " . $calc->dividir(10, 2) . "<br> <br>";
echo "Multiplicação: " . $calc->multiplicacao(2, 10) . "<br> <br>";
