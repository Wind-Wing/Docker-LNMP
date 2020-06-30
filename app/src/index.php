<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "172.17.0.2";
$username = "root";
$password = "root";
$conn = new PDO("mysql:host=$servername;", $username, $password);
// if ($conn->connect_error) {
//     die("Connection fail: " . $conn->connect_error);
// } 
// echo "Connection succeed";


phpinfo();

?>