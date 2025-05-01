<?php

trait Objeto {

  public function teste () {
    echo "Testendo trait de objeto <br>";
    echo "trait objeto <br> <br>";
  }

}

trait Fabio {

  public function fabio() {
    echo "Esta trait é da trait Fábio";
  }

}

class Central {

  use Objeto;
  use Fabio;

}

$x = new Central;
$fabio = new Central;

$fabio->teste();
$fabio->fabio();
