<?php
$feedback = $_GET["feedback"];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "172.17.0.2";
$username = "root";
$password = "root";
$database = "user_info";
$conn = new mysqli($servername, $username, $password, $database);

$sql = "insert into feedback (msg) values ('" . $feedback ."')";
echo $sql, "<br>";
mysqli_query($conn, $sql);

$error = $conn->error;
if ($error) {
    echo $error;
} else {
    echo "Thank you!";
}
?>