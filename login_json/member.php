<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require 'config.php';
    session_start();
    if(isset($_SESSION['username'])){
        echo 'Welcome to Username: '.$_SESSION['username'];
    }else{
        header('Location:index.php');
    }
?>    
</body>
</html>
