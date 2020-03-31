<?php
require './connection.php';
require './functions/Model_view.php';

$view = new Model_view();
$Show = $view->Titles();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Show['login'] ?></title>
    <?php require './head.php' ?>
</head>

<body>
    <div class="top">
        <?php require './navbar.php' ?>
    </div>
    <!-- End top -->
    <div class="body">
        <section class="hero is-primary is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-centered">
                        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                            <form class="box" method="POST" action="check_login.php">
                                <div class="field">
                                    <label for="" class="label">Username</label>
                                    <div class="control has-icons-left">
                                        <input type="text" placeholder="Username" name="username" class="input" maxlength="30" required>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Password</label>
                                    <div class="control has-icons-left">
                                        <input type="password" placeholder="*******" name="password" maxlength="20" class="input" required>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="checkbox">
                                        <input type="checkbox" >
                                        Remember me
                                    </label>
                                </div>
                                <div class="field">
                                    <button class="button is-success" id="Login">
                                        Login
                                    </button>
                                    <button class="button is-success" type="reset">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Body -->
    <?php
    // if(!empty($_POST)){
    //     $view->Login($_POST['username'],$_POST['password']);
    // }
    ?>

</body>

</html>

<?php
if (isset($_GET['regissuc'])) {
?>
    <script type="text/javascript">
        jQuery(function() {
            Swal.fire("สมัครสมาชิกเรียบร้อยแล้วระบบสำเร็จ!", "ยินดีต้อนรับเข้าสู่เว็บไซต์", "success").then(function() {
                window.location.href = "index";
            });

        });
    </script>
<?php
}
?>

<script>
    // ตรวจสอบการส่งข้อมูลหากถูกส่ง จะทำการปรับการส่งให้เป็น Null 
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>