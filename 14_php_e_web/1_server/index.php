<?php

print_r($_SERVER);
echo "<br><br><br>";

echo $_SERVER['PHP_SELF'] . "<br><br>";
echo $_SERVER['HTTP_HOST'] . "<br><br>";
echo $_SERVER['SERVER_PROTOCOL'] . "<br><br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br><br>";

if($_SERVER['HTTP_HOST'] == 'localhost') {
    echo "Está acessando o localhost <br><br>";
}