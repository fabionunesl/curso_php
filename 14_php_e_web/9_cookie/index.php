<?php

    setcookie("nome", "Fábio",time() + 3600);

    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá mundo!</h1>
    <?php if($nome != "") : ?>
        <p>Seja bem-vindo <?= $nome?></p>
    <?php endif;?>
</body>
</html>


<?php
    // Cria o cookie com duração de 1 hora
    setcookie("nome", "Fábio", time() + 3600);

    // Verifica se o cookie já está disponível
    if (isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
        echo "Bem-vindo de volta, $nome!";
    } else {
        echo "Primeira visita detectada. Recarregue a página para ver o cookie funcionando.";
    }
?>
