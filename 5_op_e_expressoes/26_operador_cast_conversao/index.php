<?php

    $a = (int) "12"; // colocando entre parenteses o tipo de dado ele converte como o exemplo
    echo $a . "<br>";  // o 12 está entre aspas o que seria string, mas como coloquei entre parentes
                    // o tipo de dado (int) entao ele converte para inteiro.
    echo $a + 10;

    echo "<br>";
    if($a === 12) {
        echo "A é idêntico a 12 <br>";
      }
    
      $b = (float) "3.14843824";
    
      if($b === 3.14843824) {
        echo "B é idêntico a 3.14 <br>";
      }
    
    
      $c = (string) 34;
    
      echo $c;
      echo "<br>";
    
      if($c === "34") {
        echo "C é idêntico a 34 <br>";
      }