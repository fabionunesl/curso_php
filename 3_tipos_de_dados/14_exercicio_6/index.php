<?php

$carro = [
    'marca' => 'Fiat',
    'modelo' => 'Uno',
    'ano' => 2004,
    'cor' => 'bordo',
    'portas' => 5,
    'teto_solar' => true
];

print_r($carro);
echo '<br>';
echo $carro['modelo'];
echo '<br>';
echo $carro['ano'];
echo '<br>';
echo $carro['teto_solar'];

$marca = $carro['marca'];
$cor = $carro['cor'];
echo '<br>';
echo "O carro é da marca $marca sendo da cor $cor.";