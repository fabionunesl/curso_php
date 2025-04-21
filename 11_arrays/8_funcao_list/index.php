<?php

  $pessoa = ["Matheus", 29, "Programador", "verde", "fiesta"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $corDosOlhos, $carro) = $pessoa;

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corDosOlhos <br>";
  echo "$carro <br>";

  print_r($pessoa);
  echo "<br>";