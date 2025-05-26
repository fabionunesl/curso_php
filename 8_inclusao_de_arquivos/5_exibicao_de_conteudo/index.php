<?php

$nome = "Fabio";
$sobrenome = "Lopes";

// RESUMINDO
// Em vez de usar para exibir (echo "nome";) somente substituir <?="nome?>



<form action="">
    <div>                    <?php // em vez usar como abaixo ?>
        <input type="text" value="<?php echo $nome; ?>">
    </div>
    <div>                    <?php // usar assim como abaixo ?>
        <input type="text" value="<?= $sobrenome;?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

