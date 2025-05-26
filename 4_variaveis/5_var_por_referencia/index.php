<?php

$x = 10;
$y =& $x;
echo $y;
echo '<br>';
echo $x;

$y = 20;

echo '<br>';
echo "Atribuição após referencia";
echo '<br>';
echo $y;
echo '<br>';
echo $x;