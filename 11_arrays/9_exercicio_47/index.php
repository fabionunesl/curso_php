<?php

$carro = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "automático"];

print_r($carro);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

list($nome, $potencia, $cor, $aro, $opcional, $cambio) = $carro;

echo "Marca: $nome <br>";
echo "Potencia: $potencia <br>";
echo "Cor: $cor <br>";
echo "Aro: $aro <br>";
echo "Opcional: $opcional <br>";
echo "Câmbio: $cambio <br>";