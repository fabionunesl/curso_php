<?php

trait Objeto {

  public function teste () {
    echo "Testendo trait de objeto <br>";
    echo "trait objeto <br> <br>";
  }

}

trait Fabio {

  public function fabio() {
    echo "Esta trait é da trait Fábio <br><br>  ";
  }

}

class Central {

  use Objeto;
  use Fabio;
  use Carol;

}

trait Carol {

  public $y = 10;

  public function carol() {
    echo "Carol é muito linda <br><br>";
  }
}


$x = new Central;
$t = new Central;

$x->teste();
$x->fabio();
$x->carol();

echo $t->y . "<br>";