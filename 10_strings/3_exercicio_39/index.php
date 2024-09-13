<?php

$arr = [
    "carro" => 50000,
    "sofá" => 1500,
    "cafeteira" => 200,
    "televisor" => 2500
];

function intemCaro($arr) {

    $arrCaros = [];

   foreach($arr as $item => $preco) {

    if($preco > 2000) {

        array_push($arrCaros, $item);
    }
   }

   return $arrCaros;

}

$novoArr = intemCaro($arr);

print_r($novoArr);