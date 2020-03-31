<?php
        require 'connection.php';
        session_start();
        session_destroy();
        // unset($_COOKIE['members']);
        header("location:index");
?>