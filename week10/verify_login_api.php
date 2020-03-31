
<?php
include('./config.php');
session_start();
header('Content-type: application/json; charset=utf-8');


$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = MD5(mysqli_real_escape_string($conn, $_POST['password']));


$sql = 'SELECT * FROM member Where username =  "' . $user . '"  ';
$results = $conn->query($sql);
$resp = array();


if ($results->num_rows) {

    $profile = mysqli_fetch_array($results, MYSQLI_ASSOC);



    if ($profile["password"] == $pass) {

        $resp["msg"] = "OK";
    } else {
        $resp["msg"] = "Password is Incorrect";
    }
} else {
    $resp["username"] = $_POST["username"];
    $resp["premission"] = 0;
    $resp["msg"] = "This account does not exist";
}

echo json_encode($resp);
?>