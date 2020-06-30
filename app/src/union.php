<?php

$id = $_GET["id"];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "172.17.0.2";
$username = "root";
$password = "root";
$database = "user_info";
$conn = new mysqli($servername, $username, $password, $database);

$sql = "Select name, price from orders where id = '" . $id . "'";
echo $sql, "<br>";

$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row["name"]."</td>";
    echo "<td>".$row["price"]."</td></tr>";
}
echo "</table>";

//phpinfo();
?>