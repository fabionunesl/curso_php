<?php

    function sumDigits($n) {
        $sum = 0;

        while ($n > 0) {
            $sum += $n % 10;
            $n = intval($n / 10);

        }

        return $sum;

    }

    $numero = 12;

    echo "A soma dos digitos de $numero é: " . sumDigits($numero);