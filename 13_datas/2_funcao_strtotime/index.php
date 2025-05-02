<?php

$cincodias = strtotime("5 days");
echo $cincodias . "<br><br>";

$dezdias = strtotime("10 days");
echo $dezdias . "<br><br>";

$dataAtualMais5 = date('d/m/y', $cincodias);
echo $dataAtualMais5 . "<br><br>";

$dataAtualMais10 = date('d/m/y', $dezdias);
echo $dataAtualMais10 . "<br><br>";