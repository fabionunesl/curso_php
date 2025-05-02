<?php

class Humano {
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}
    public function andar(){}

}


//class_exists verifica se a classe existe
if (class_exists("Humano")) {
    echo "A classe existe <br><br>";
} else {
    echo "A classe não existe <br><br>";
}


if (class_exists("carro")) {
    echo "A classe existe <br><br>";
} else {
    echo "A classe não existe <br><br>";
}

print_r(get_class_vars("Humano"));

print_r(get_class_methods("Humano"));
