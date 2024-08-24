<?php


//refere-se ao contexto no qual uma variável, função ou objeto é acessível e manipulável.
// local é quando ele pode ser acessado somente dentro de uma função


$x = 10;

echo "$x global <br>";

function teste() {

    $x = 5;

    echo "$x local <br>";
}

teste();

function testando() {
    $x = 12;
    echo "$x local 2 <br>";

}

$x = 99;

testando();

teste();

echo "$x global <br>";