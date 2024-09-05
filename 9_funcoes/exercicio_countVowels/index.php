<?php
function countVowels($string) {
    // Definindo as vogais, tanto minúsculas quanto maiúsculas
    $vowels = "aeiouAEIOU";
    // Inicializando o contador de vogais
    $count = 0;
    
    // Percorrendo cada caractere da string
    for ($i = 0; $i < strlen($string); $i++) {
        // Verificando se o caractere atual é uma vogal
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }
    
    // Retornando o número total de vogais
    return $count;
}

// Exemplo de uso
echo countVowels("Hello World");  // Saída: 3
echo countVowels("PHP");          // Saída: 0
?>
