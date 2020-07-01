<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "172.17.0.2";
$username = "root";
$password = "root";
$database = "user_info";
$conn = new mysqli($servername, $username, $password, $database);

$username = $_GET["username"];
$password = $_GET["password"];
$sql = "Select password from user_account where username = '" . $username . "'";
echo $sql, "<br>";

$result = mysqli_query($conn, $sql);
if($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $pwd = $row["password"];
    if ($pwd == $password) {
        echo "Login succeed";
    } else {
        echo "Invalid password";
    }
} else {
    echo "Invalid account";
}

//phpinfo();
?>