<?php


    function soma($a, $b, $c) {

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args();

        return $a + $b;

    }

    soma(3,4,3);
