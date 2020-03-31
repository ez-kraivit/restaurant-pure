<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">

    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <?php 
    require 'config.php';
    ?>
</head>

<body>
    <div class="container">
        <div id="show"></div>
        <legend>เข้าสู่ระบบ</legend>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="button" id="check" class="btn btn-primary">Sgin In</button>
    </div>

    <script>
        $('document').ready(function() {
            $('#check').click(function() {
                console.log($('#username').val());
                console.log($('#exampleInputPassword1').val());
                var username = $('#username').val();
                var password = $('#exampleInputPassword1').val();
                // $.get('./Getlogin.php',{username:username,password:password},function(data){
                //     console.log(data);
                // });
                $.post('./Getlogin.php',{username:username,password:password},function(data){
                    console.log(data.msg);
                   $('#show').html(data.msg);
                   if(data.msg=='OK'){
                    location.replace = './member.php';
                   }else{
                       $('#show').html('ไม่สามารถไปต่อได้');
                   }
                });
                
            });
        });
    </script>
</body>

</html>