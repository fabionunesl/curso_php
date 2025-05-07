<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();
$dataD = new DateTime();

$dataB-> setDate(1985, 11, 14);
$dataB-> setTime(10, 10, 10);

$dataC-> setDate(1985, 11, 14);
$dataC-> setTime(10, 10, 10);



print_r($dataB);
echo "<br><br>";
print_r($dataA);
echo "<br>";

if($dataA > $dataB) {
    echo "A data A é maior que a data B <br>";
} else {
    echo "A data B é maior que a data A <br>";
}

if($dataB == $dataC) {
    echo "A data B é igual a data C <br>";
} else {
    echo "As datas são diferentes <br>";
}

if($dataA == $dataD) {
    echo "A data A é igual a data D <br>";
} else {
    echo "As datas são diferentes <br>";
}

