<?php
    function verificarAcesso(int $idade, bool $acesso): string {
        if($idade >= 18 && $acesso == true) {
            return "Acesso autorizado.";
        } else if($idade < 18) {
            return "Acesso negado.";
        } else if($idade >= 18 && $acesso == false) {
            return "Acesso negado. Autorização necessária.";
        }
    }

    echo verificarAcesso(18, 1);
    echo "<br>";
    echo verificarAcesso(17, 1);
    echo "<br>";
    echo verificarAcesso(18, 0);
