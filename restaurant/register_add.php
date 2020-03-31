<?php
    require './connection.php';
    if(isset($_POST)){
        //     //query 
            $username = $_POST["username"];
            $password = $_POST["password"];
            $repassword = $_POST["repassword"]; 
            $email = $_POST["email"]; 
            $phone = $_POST["phone"]; 
            print_r($password);
            print_r($repassword);
            $sql = 'SELECT * FROM members Where username = "'.$username.'"';
            $results = $conn->query($sql);
            $row = mysqli_fetch_array($results);
            if(!$row){
                if ($_POST["password"] == $_POST["repassword"]) {
                    $password = md5(base64_encode(md5(md5(sha1($_POST["password"])))));
                    $sql = "INSERT INTO members(username,password,email,phone) " . "VALUES( '$username', '$password','$email','$phone');    ";
                    print_r($sql);
                    $conn->query($sql);
                    session_start();
                    $_SESSION['username'] = $row["username"];
                    session_write_close();    
                     header('location:login?regissuc="สมัครเรียบร้อยแล้ว"');
                } else {
                    print_r($password);
                    print_r($repassword);
                    header('location:members?passame="รหัสผ่านซ้ำ"');
                }
            }
            else{
                header('location:register?noregis="ชื่อผู้ใช้ซ้ำกับในระบบ"');
            }
    }
    else{
        header('location:register?fail="คุณไม่มีข้อมูล"');
    }
