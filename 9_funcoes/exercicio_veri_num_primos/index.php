<?php

    function isPrime($n) {
        if ($n <=1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i ==0) {
                return false;
            }
        }
        return true;
    }

    $numero = 2;

    if (isPrime($numero)) {
        echo "$numero é um número primo. <br>";
    } else {
        echo "$numero não é um número primo. <br>";
    }

   