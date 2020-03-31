<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnam = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbnam);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    mysqli_set_charset($conn,"utf8");
}
?>