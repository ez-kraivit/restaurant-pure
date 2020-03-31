<?php
class Getlogin
{
    public function Get1($user, $pass)
    {
        include('config.php');
        $username = $user;
        $password = $pass;
        // echo 'Username : ' . $username . '  ';

        $data1 = array();
        $data2 = array();
        $data = array();
        $sql = "
            SELECT *
            FROM members
            ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($data1, $row['username']);
            array_push($data2, $row['password']);
        }
        // print_r($data1);
        // print_r($data2);
        if (in_array($username, $data1)) {
            if (in_array($password, $data2)) {
                $data["msg"] = "OK";

            } else {
                $data['msg'] = "password is incorrect";
            }
        } else {
            $data['msg'] = "This account does not exist";

        }
        $_SESSION['username'] = $username;
        echo json_encode($data);
    }


    public function Get2($user, $pass)
    {
        include('config.php');
        $username = $user;
        $password = $pass;
        echo 'Username : ' . $username . '  ';

        $sqluser = "
        SELECT *
        FROM members
        WHERE username = '$username'
        ";
        $result = mysqli_query($conn, $sqluser);
        $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!$rows) {
            echo "Message : This account does not exist\n";
        } else {
            $sqlpass = "
            SELECT *
            FROM members
            WHERE password = '$password'
            ";
            $result = mysqli_query($conn, $sqlpass);
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (!$rows) {
                echo "Message : password is incorrect\n";
            } else {
                echo "Message : ok\n";
            }
        }
    }
}
?>

<?php
include('config.php');
session_start();
header('Content-type: application/json; charset=utf-8');
$username =  $_POST['username'];
$password = $_POST['password'];
// $data = array();
$getlogin = new Getlogin();
if ($username == true && $password == true) {
    $getlogin::Get1($_POST['username'],  $_POST['password']);
    // $data['Permission'] = 1;
    // print_r($data);
} else {
    // $data['Permission'] = 0;
    // print_r($data);
}
?>