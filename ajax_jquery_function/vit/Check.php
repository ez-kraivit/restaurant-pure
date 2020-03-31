<?php
class Chechk
{
    public static function Register($u, $p)
    {
        header('Content-type: application/json; charset=utf-8');
        require './config.php';
        $data = "";
        $username = $u;
        $password = $p;
        if (isset($username) && isset($password)) {
            $checkM = "SELECT usr , pwd FROM member WHERE usr = '" . $username . "' and pwd = '" . $password . "' ";
            $objQuery = mysqli_query($conn, $checkM);
            $rows = mysqli_fetch_array($objQuery);
            if ($rows) {
                $data = "0";
            } else {
                $data = "1";
                $insert = new Inserts();
                $insert->InsertM($u,$p);
            }
            echo json_encode($data);
        }
    }
}

class Inserts extends  Chechk{
    public function InsertM($u,$p){
        require './config.php';
        $data = "";
        $username = $u;
        $password = $p;
        $sql = " INSERT INTO member
        (usr, pwd)
        VALUES
        ('$username', '$password')";
        mysqli_query($conn, $sql) or die (mysqli_error($conn));
        mysqli_close($conn);
    }
}

if((isset($_POST['username']))&&(isset($_POST['password']))){
    $check = new Chechk();
    $check->Register($_POST['username'], $_POST['password']);
}

?>