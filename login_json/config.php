<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnam = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbnam);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    // echo "Connected successfully <br>";
    mysqli_set_charset($conn,"utf8");
}
?>