<?php
    if(!empty($_POST)){
        require './connection.php';
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = md5(base64_encode(md5(md5(sha1($_POST['password'])))));
            $chackmember = "SELECT * FROM members WHERE USERNAME='" . $username . "' and PASSWORD='" . $password . "' ";
            $objQuery = mysqli_query($conn, $chackmember);
            $rows = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
            if (!$rows) {
                header("location:login");
            } else {
                session_start();
                $_SESSION['members'] = $username;
                // setcookie('members', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
                header("location:index");
            }
        } 
    }else{
        header("location:login");
    }
?>