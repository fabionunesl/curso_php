<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(1985, 11, 14);
echo $dataB->format('d/m/y') . "<br>";

echo $dataA->format('d/m/y') . "<br>";

$idadeAtual = $dataA->diff($dataB);
print_r($idadeAtual);
echo "<br>";
echo $idadeAtual->format("%y anos") . "<br>";
echo $idadeAtual->format("%a dias") . "<br>";
echo $idadeAtual->format("%h horas") . "<br>";
echo $idadeAtual->format("%i minutos") . "<br>";

