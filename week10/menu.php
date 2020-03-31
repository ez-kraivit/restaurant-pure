<?php


    session_start();

    if(!isset($_SESSION["user_login"])) {
        header("Location: ./login_ajax.php");

    }

    echo "HELLO :: ".$_SESSION["user_login"];
?>