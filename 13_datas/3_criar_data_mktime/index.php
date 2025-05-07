<?php

$dataNascimentoFabio = mktime(9, 15, 14    ,     11, 14, 1985);

echo $dataNascimentoFabio . "<br><br>";

$dataNascimentoFabioFormatada = date('d/m/y H:i:s' , $dataNascimentoFabio)   ;
echo $dataNascimentoFabioFormatada    .    "<br><br>"   ;

