<?php
if (!empty($_POST)) {
    $n = 10;
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    require './connection.php';
    header('Content-type: application/json; charset=utf-8');
    $dateid = $_POST['dateid'];
    $peopleid = $_POST['peopleid'];
    $timeid = $_POST['timeid'];
    $username = $_POST['username'];
    $idt = $_POST['idt'];
    $booking = generateRandomString($n);
    $data = array();
    $sql = "SELECT * FROM booking Where datp_up = '".$dateid."' AND time = '".$timeid."' AND name='".$idt."' limit 1    ";
    // $sql = "SELECT * FROM booking Where username =  '" . $username . "' AND datp_up = '".$dateid."' AND time = '".$timeid."' AND people ='".$peopleid."' AND name='".$idt."' limit 1    ";
    $objQuery = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($objQuery);
    if(!$rows){
        $data["meg"] = "ยังไม่มีผู้จอง";
        $sql = "INSERT INTO booking(datp_up,time,people,name,username,ids,booking_number) "."
        VALUES( '$dateid', '$timeid','$peopleid','$idt','$username',1,'$booking');    ";
        $conn->query($sql);

    }else{
        $data["meg"] = "มีผู้จองแล้ว";
    }
    echo json_encode($data);
} else {
    header('location:index');
}
