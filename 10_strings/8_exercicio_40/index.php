<?php

$frase = "O Rato roeu a roupa do rei de Roma";
$contadorDeAs = 0;

for($i = 0; $i < strlen($frase); $i++) {

    if ($frase[$i] === "a") {
        $contadorDeAs++;
    }
}

echo "O numero de a's é de $contadorDeAs";