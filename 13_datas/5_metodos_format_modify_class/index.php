<?php
//format
$qqc = new DateTime();
echo $qqc->format('d/m/y H:i:s') . "<br>";
echo $qqc->format('dmy H:i:s') . "<br>";
echo $qqc->format('D.F.y H:i:s') . "<br>";

//modify
$qqc->modify('+10 dias');
echo $qqc->format('d/m/y H:i:s') . "<br>";

$qqc->modify('+2 months');
echo $qqc->format('d/m/y H:i:s') . "<br>";

$qqc->modify('-25 year +5 minutes');
echo $qqc->format('d/m/y H:i:s') . "<br>";


