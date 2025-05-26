<?php

  class Car {

    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar() {
      echo "Vrummmm <br>";
    }

  }

  $ferrari = new Car;

  $ferrari->rodas = 4;

  echo $ferrari->aro . "<br>";
  echo $ferrari->rodas . "<br>";
  echo $ferrari->cor . "<br>";

  $ferrari->cor = "Azul";
  $ferrari->aro = 17;

  echo $ferrari->aro . "<br>";

  echo $ferrari->cor;

  $ferrari->ligar();
