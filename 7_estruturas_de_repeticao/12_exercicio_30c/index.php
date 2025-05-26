<?php

$arr = [];

for($i =10; $i <= 20; $i++) {

    if($i % 2 != 0) {
        echo " Somente ímpar $i <br>";        
    } if($i == 17) {
        echo "Terminando loop <br>";
        break;
    }

   $arr[] = $i;
   
}

