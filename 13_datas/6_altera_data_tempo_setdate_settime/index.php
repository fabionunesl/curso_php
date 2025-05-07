<?php

$qqc = new DateTime();
//data atual
print_r($qqc);
echo "<br><br>";

//alterando a data com setDate
$qqc->setDate(1985, 11, 14);
print_r($qqc);
echo "<br>";
echo $qqc->format('d/m/y H:i:s');
echo "<br><br>";


//alterando a hora minutos e segundos com setTime
$qqc->setTime(12, 12, 12);
print_r($qqc);
echo "<br><br>";
echo $qqc->format('d/m/y H:i:s');

