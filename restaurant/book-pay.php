<?php
require './connection.php';
require './functions/Model_view.php';

$view = new Model_view();
$Show = $view->Titles();
session_start();
?>
<?php
if ((!empty($_GET)) && (isset($_SESSION['members']))) {
    $booking = $_GET['booking'];
    $username = $_SESSION['members'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Show['book-pay'] ?></title>
        <?php require './head.php' ?>
    </head>

    <body>
        <div class="top">
            <?php require './navbar.php' ?>
        </div>
        <!-- End top -->
        <?php require './view-order.php' ?>
        <?php require './count.php' ?>
        <div class="body">
            <section class="hero is-light is-bold is-fullheight">
                <div class="hero-body">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-5-tablet is-6-desktop is-6-widescreen">
                                <form class="box" method="POST" action="updateoder.php">
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Date and time</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <?php echo $datp_up_p . ' ' . $time_p ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Table for <?php echo $people_p ?> people(s): </b>
                                            </div>
                                            <div class="column has-text-left">
                                                <span class="tag is-danger"><?php echo $name_p ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                                <b> Reservation form </b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                                fill the form to reserve a table
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-left">
                                                <label>Title:</label>
                                                <div class="field">
                                                    <div class="control">
                                                        <input type="hidden" name="booking" value="<?php echo $booking ?>">
                                                        <input type="hidden" name="username" value="<?php echo $username ?>">
                                                        <div class="control">
                                                            <div class="select">
                                                                <select required>
                                                                    <option>โปรดเลือก สถานะของท่าน</option>
                                                                    <option value="mr">Mr.</option>
                                                                    <option value="mrs">Mrs.</option>
                                                                    <option value="miss">Miss.</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column has-text-left">
                                                <label>First name:</label>
                                                <div class="field">
                                                    <div class="control">
                                                        <input class="input is-primary" name="fname" type="text" placeholder="Input first name" value="<?php echo $fname_p ?>" required autofocus value pattern="^[a-zA-Z0-9]+$" title="กรุณากรอกชื่อผู้ใช้ภาษาอังกฤษหรือตัวเลขเท่านั้น">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-left">
                                                <label>Last name:</label>
                                                <div class="field">
                                                    <div class="control">
                                                        <input class="input is-primary" name="lname" type="text" placeholder="Input last name" value="<?php echo $lname_p ?>" required autofocus value pattern="^[a-zA-Z0-9]+$" title="กรุณากรอกชื่อผู้ใช้ภาษาอังกฤษหรือตัวเลขเท่านั้น">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column has-text-left">
                                                <label>Email:</label>
                                                <div class="field">
                                                    <div class="control">
                                                        <input class="input is-primary" type="email" placeholder="Input email" value="<?php echo $email_p ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-left">
                                                <label>Phone:</label>
                                                <div class="field">
                                                    <div class="control">
                                                        <input class="input  is-primary" type="text" placeholder="Phone Number" name="phone" id="phone" value="<?php echo $phone_p ?>" required autofocus value pattern="^[0-9]+$" title="กรุณากรอกตัวเลขเท่านั้น">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                                Payment is required to secure your reservation
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                                <h4><b>Price 299.00 THB</b></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                                <button class="button is-success is-fullwidth" type="submit">ชำระรายการ</button>
                                            </div>
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

    </html>

<?php } else {
    header('location: index');
}
?>
<script>
    jQuery(function() {
        jQuery("#back").click(function() {
            window.location.href = "order";
        });
    });
</script>
<!-- <div class="tile is-parent">
    <div class="tile is-child box">
        <p class="title">รายการที่ยังไม่ได้ชำระ</p>
        <div class="table-container">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>หมายเลข</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>โต๊ะที่จอง</th>
                        <th>สถานะ</th>
                        <th>QR-CODE</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                                            <td>' . $data['booking_number'] . '</td>
                                            <td>' . $data['datp_up'] . '</td>
                                            <td>' . $data['time'] . '</td>
                                            <td>' . $data['name'] . '</td>
                                            <td><span class="tag is-warning">รอดำเนินการ</span></td>
                                            <td><a href="qrcode?booking=' . $data['booking_number'] . '">คลิก</a></td>
                                            </tr>
                                            ';
                </tbody>
        </div>
    </div>
</div> -->