<?php
require './connection.php';
require './functions/Model_view.php';

$view = new Model_view();
$Show = $view->Titles();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $Show['register'] ?></title>
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
                     <form class="box" method="post" action="register_add.php">


                        <div class="field">
                           <label class="label">Username</label>
                           <div class="control has-icons-left has-icons-right">
                              <input class="input" type="text" placeholder="Username input" name="username" id="username" required autofocus value pattern="^[a-zA-Z0-9]+$" title="กรุณากรอกชื่อผู้ใช้ภาษาอังกฤษหรือตัวเลขเท่านั้น">
                              <span class="icon is-small is-left">
                                 <i class="fa fa-user"></i>
                              </span>
                           </div>
                        </div>
                        <div class="field">
                           <label class="label">Password</label>
                           <div class="control has-icons-left has-icons-right">
                              <input class="input" type="password" placeholder="Password" name="password" id="password" required autofocus value pattern="^[a-zA-Z0-9]+$" title="กรุณากรอกรห้สผ่านภาษาอังกฤษหรือตัวเลขเท่านั้น">
                              <span class="icon is-small is-left">
                                 <i class="fa fa-lock"></i>
                              </span>
                           </div>
                        </div>

                        <div class="field">
                           <label class="label">Re - Password</label>
                           <div class="control has-icons-left has-icons-right">
                              <input class="input" type="password" placeholder="Re - Password" name="repassword" id="repassword" required autofocus value pattern="^[a-zA-Z0-9]+$" title="กรุณากรอกรห้สผ่านภาษาอังกฤษหรือตัวเลขเท่านั้น">
                              <span class="icon is-small is-left">
                                 <i class="fa fa-lock"></i>
                              </span>
                           </div>
                        </div>
                        <div class="field">
                           <label class="label">Email</label>
                           <div class="control has-icons-left has-icons-right">
                              <input class="input" type="email" placeholder="Email input" name="email" id="email">
                              <span class="icon is-small is-left">
                                 <i class="fa fa-envelope"></i>
                              </span>

                           </div>
                        </div>
                        <div class="field">
                           <label class="label">Phone</label>
                           <div class="control">
                              <input class="input" type="text" placeholder="Phone Number" name="phone" id="phone" required autofocus value pattern="^[0-9]+$" title="กรุณากรอกตัวเลขเท่านั้น">
                           </div>
                        </div>
                        <div class="field is-grouped">
                           <div class="control">
                              <button class="button is-success">Register</button>
                           </div>
                           <div class="control">
                              <button class="button is-success" type="reset">Reset</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- End Body -->


</body>


<?php
if (isset($_GET['noregis'])) {
?>
   <script type="text/javascript">
      Swal.fire("ชื่อผู้ใช้ของคุณซ้ำกับในระบบ", "กรุณาใช้ชื่อผู้ใช้อื่น", "error").then(function() {
         window.location = "register";
      });
   </script>
<?php
}
?>

<?php
if (isset($_GET['passame'])) {
?>
   <script type="text/javascript">
      Swal.fire("รหัสผ่านของคุณไม่ตรงกัน", "กรุณากรอกรหัสผ่านใหม่", "error").then(function() {
         window.location = "register";
      });
   </script>
<?php
}
?>

</html>