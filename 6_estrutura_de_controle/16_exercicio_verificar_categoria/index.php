<?php

    function verificarCategoria(string $categoria): string {

    if ($categoria == "eletrônicos") {
        return "Essa categoria é de produtos eletrônicos";
    } else if ( $categoria == "vestuário") {
        return "Essa categoria é de produtos de vestuário";
    } else if ($categoria == "alimentos") {
        return "Essa categoria é de produtos alimentícios";
    } else {
        return "Categoria desconhecida";
    }
}

    echo verificarCategoria("eletrônicos");
    echo "<br>";
    echo verificarCategoria("vestuário");
    echo "<br>";
    echo verificarCategoria("alimentos");
    echo "<br>";
    echo verificarCategoria("brinquedo");