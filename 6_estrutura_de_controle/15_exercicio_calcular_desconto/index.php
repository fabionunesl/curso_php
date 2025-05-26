<?php

    function calcularDesconto(float $produto, string $categoria) {
        if( $categoria == "eletrônicos") {
            $percentualDesconto = $produto * 0.10;
            $valorDesconto = $produto - $percentualDesconto;
            return $valorDesconto;
        } else if($categoria == "vestuário") {
            $percentualDesconto = $produto * 0.20;
            $valorDesconto = $produto - $percentualDesconto;
            return $valorDesconto;
        }else if($categoria == "alimentos") {
            $percentualDesconto = $produto * 0.05;
            $valorDesconto = $produto - $percentualDesconto;
            return $valorDesconto;
    } else {
        return $produto;
    }
}

echo calcularDesconto(100, "eletrônicos");
echo "<br>";
echo calcularDesconto(100, "vestuário");
echo "<br>";
echo calcularDesconto(100, "alimentos");
echo "<br>";
echo calcularDesconto(100, "farmacia");