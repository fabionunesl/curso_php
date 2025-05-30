<?php

$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM carros";

$result = $conn->query($sql);

print_r($result);

$conn->close();
