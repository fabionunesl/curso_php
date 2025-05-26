<?php

$cincodias = strtotime("5 days");
echo $cincodias . "<br><br>";

$dezdias = strtotime("10 days");
echo $dezdias . "<br><br>";

$dataAtualMais5 = date('d/m/y', $cincodias);
echo $dataAtualMais5 . "<br><br>";

$dataAtualMais10 = date('d/m/y', $dezdias);
echo $dataAtualMais10 . "<br><br>";


$doismeses = strtotime('2 months') . "<br>";
echo $doismeses . "<br>";
$dataAtualMaisDoisMeses = date('d/m/y', $doismeses);
echo $dataAtualMaisDoisMeses . "<br>";

$dozeAnos = strtotime("12 years") . "<br><br>";
echo date('d/m/y', $dozeAnos) . "<br><br>";

$dataAtualMais5 = date('d/m/y', $cincodias);
echo $dataAtualMais5 . "<br><br>";