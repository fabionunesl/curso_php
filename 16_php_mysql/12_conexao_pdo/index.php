<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host = "localhost";
$user = "root";
$pass = "farol8591";
$db = "cursophp";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
