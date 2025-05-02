<?php

class Passenger {

    public $name;
    public $age;
    public $seatNumber;

    public function __construct($name, $age, $seatNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSeatNumber() {
        return $this->getSeatNumber;
    }

    public function setSeatNumber($seatNumber) {
        return $this->setSeatNumber = $seatNumber;

    }
}

$Passageiro1 = new Passenger("Fábio", 39, "23");

echo "Nome do passageiro é " . $Passageiro1->getName() . "<br><br>";
echo "Idade do passageiro é " . $Passageiro1->getAge() . "<br><br>";
echo "Lugar do passageiro é " . $Passageiro1->setSeatNumber() . "<br><br>";
