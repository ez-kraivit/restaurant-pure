<?php
require __DIR__ . './config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- เรียกใช้ Bootstrp 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- End B -->

    <!-- เรียกใช้ javaScript Library jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- End J -->

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- End S -->

</head>

<body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <div class="from-row">
                        <h1>Register</h1>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <label for="validationTooltip01">Username</label>
                            <input type="text" class="form-control" id="username" value="" maxlength="20" placeholder="Input Username">
                        </div>
                        <div class="col-12">
                            <label for="validationTooltip02">Password</label>
                            <input type="password" class="form-control" id="password" value="" placeholder="Input Password" maxlength="15">
                        </div>
                        <div class="col-12 mt-2">
                            <button class="btn btn-danger btn-block" id="register" type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <div class="from-row">
                        <h1>Login</h1>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <label for="validationTooltip01">Username</label>
                            <input type="text" class="form-control" id="username" value="" maxlength="20" placeholder="Input Username">
                        </div>
                        <div class="col-12">
                            <label for="validationTooltip02">Password</label>
                            <input type="password" class="form-control" id="password" value="" placeholder="Input Password" maxlength="15">
                        </div>
                        <div class="col-12 mt-2">
                            <button class="btn btn-danger btn-block" id="login" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

<script>
    jQuery(function() {
        // ตรวจสอบ Input id="username" หากมี space bar ไม่ให้ทำงาน โดย >= -1 ห้ามเกิดขึ้น
        jQuery('#username').on('keydown', function(e) {
            if (e.keyCode == 32 && jQuery(this).val().indexOf(' ') >= -1) {
                return false;
            }
        });
        // ตรวจสอบ Input id="password" หากมี space bar ไม่ให้ทำงาน โดย >= -1 ห้ามเกิดขึ้น
        jQuery('#password').on('keydown', function(e) {
            if (e.keyCode == 32 && jQuery(this).val().indexOf(' ') >= -1) {
                return false;
            }
        });

        // ทำการเรียก อาร์กิวเมนต์ ฟังก์ชั่น jQuery ตรวจสอบ id button>id="register"
        jQuery("#register").click(function() {
            const username = jQuery("#username").val();
            const password = jQuery("#password").val();
            if ((!(username == "") == true) && (!(password == "") == true)) {
                console.log("ผ่าน ความปลอดภัย ชั้นแรก");
                jQuery.post("./Check", {
                    username: username,
                    password: password
                }, function(data) {
                    console.log(data);
                    if (data == "1") {
                        Swal.fire(
                            'ยินดีด้วยท่านสมัครสมาชิกสำเร็จ',
                            'ข้อมูลของท่านถูกต้อง '+data,
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'ท่านไม่สามารถสมัครสมาชิกได้',
                            'ข้อมูล Username or Password ไม่ถูกต้อง',
                            'error'
                        )
                    }
                });
            } else {
                console.log("ไม่ผ่าน ความปลอดภัย ชั้นแรก");
                Swal.fire(
                    'กรุณาตรวจสอบความถูกต้อง',
                    'โปรดระบุ Username and Password',
                    'warning'
                )
            }
        });

    });
</script>

<!-- scoped ใช้ในกรณี บังคับให้ทำการเปลี่ยนแปลงแค่ page1 -->
<style scoped>
    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #f8f9fa !important;
        color: #282d32;
    }
</style>