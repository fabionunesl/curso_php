<?php
function sumEvenNumbers($n) {
    $sum = 0;

    // Estrutura de repetição para percorrer os números de 1 até $n
    for ($i = 1; $i <= $n; $i++) {
        // Verifica se o número é par
        if ($i % 2 == 0) {
            $sum += $i; // Acumula a soma dos números pares
        }
    }

    return $sum;
}

// Exemplo de uso
$resultado = sumEvenNumbers(10);
echo $resultado;  // Saída: 30
?>

