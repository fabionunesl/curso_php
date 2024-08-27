<?php
function compararNumeros(int $num1, int $num2): string {
    if ($num1 > $num2) {
        return "O primeiro número é maior.";
    } else if ($num2 > $num1) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}

// Exemplos de uso da função
echo compararNumeros(10, 20); // Retorna "O segundo número é maior."
echo "<br>";
echo compararNumeros(30, 15); // Retorna "O primeiro número é maior."
echo "<br>";
echo compararNumeros(5, 5);   // Retorna "Os números são iguais."
?>
