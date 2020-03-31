<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
    <div id="api_msg"></div>
    <input id="username" type="text" name="username"></input>
    <input id="password" type="password" name="password"></input>
    <button id='btn_login' type="submit" value="">login</button>



    <script>
 $(document).ready(function(){

        $("#btn_login").click(function(){

            console.log($("#username").val());
            console.log($("#password").val());

            $.post("./verify_login_api.php", { username: $("#username").val(), 
            password: $("#password").val() } , function (recvResp){
                console.log(recvResp.msg);
                $("#api_msg").html(recvResp.msg);

            } );
        });

        });


    </script>
</body>
</html>