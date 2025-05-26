<?php

class Humano {
    public function falar() {
        echo "Olá!";
    }
}

$fabio = new Humano;
$teste = 10;

//para saber se é um objeto
if(is_object($fabio)) {
    echo "É um objeto <br> <br>";
} else { 
    echo "Não é um objeto <br> <br>";
}
// para saber se é um objeto
if(is_object($teste)) {
    echo "É um objeto <br> <br>";
} else { 
    echo "Não é um objeto <br> <br>";
}


//para saber qual é a classe do objeto
echo get_class($fabio) . "<br><br>";

if (method_exists($fabio, "falar")) {
    echo "Método existe <br> <br>";
} else {
    echo "Método não existe <br> <br>";
}

if (method_exists($fabio, "asd")) {
    echo "Método existe <br> <br>";
} else {
    echo "Método não existe <br> <br>";
}
