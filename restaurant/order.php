<?php
require './connection.php';
require './functions/Model_view.php';

$view = new Model_view();
$Show = $view->Titles();
session_start();
?>
<?php
if (isset($_SESSION['members'])) {
    $username = $_SESSION['members'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Show['order'] ?></title>
        <?php require './head.php' ?>
    </head>

    <body>
        <div class="top">
            <?php require './navbar.php' ?>
        </div>
        <!-- End top -->
        <?php require './count.php' ?>
        <div class="body">
            <section class="hero is-medium is-dark is-bold">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Order Restaurant
                        </h1>
                        <h2 class="subtitle">
                            รายการสั่งซื้อของคุณ
                        </h2>
                    </div>
                </div>
            </section>
            <!-- End select -->
            <br>
            <div class="container">
                <br>
                <div class="row">
                    <nav class="level">
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">รายการจองของคุณ</p>
                                <p class="title"><?php echo $total ?></p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">ชำระแล้ว</p>
                                <p class="title"><?php echo $buy_order ?></p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">ยังไม่ได้ชำระ</p>
                                <p class="title"><?php echo $notbuy_order ?></p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">คะแนน</p>
                                <p class="title">789</p>
                            </div>
                        </div>
                    </nav>
                </div>
                <br>
                <div class="row">
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-vertical is-parent">
                            <div class="tile is-child box">
                                <p class="title">รูปภาพ</p>
                                <p class="row  has-text-centered"><img style="height: 200px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSU7rJGF39Vu01DCC8I3mK5NC5fEEZj0Mx4CcdwE7Fs1YTlT7Ff"></p>
                            </div>
                            <div class="tile is-child box">
                                <p class="title">ข้อมูลของคุณ</p>
                                <p>เปลี่ยนรหัสผ่าน <a>คลิก</a></p>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <p class="title">รายการชำระของคุณ</p>
                                <div class="table-container">
                                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>หมายเลข</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>โต๊ะที่จอง</th>
                                                <th>สถานะ</th>
                                                <th>ตรววจสอบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($data = mysqli_fetch_array($count_m4)) {
                                                echo '
                                            <tr>
                                            <td>' . $data['booking_number'] . '</td>
                                            <td>' . $data['datp_up'] . '</td>
                                            <td>' . $data['time'] . '</td>
                                            <td>' . $data['name'] . '</td>';
                                            if($data['status']=="0"){
                                                echo'
                                                <td><span class="tag is-warning">รอดำเนินการ</span></td>
                                                <td class="has-text-centered"><a class="button is-warning is-small  is-rounded modal-buy" href="book-pay?booking=' . $data['booking_number'] . '" >Booking</a></td>
                                                ';
                                            }else{
                                                echo'
                                                <td><span class="tag is-success">เสร็จสิ้น</span></td>
                                                <td class="has-text-centered"><a class="button is-success is-small  is-rounded modal-buy" href="order-detail?booking=' . $data['booking_number'] . '&status='.$data['status'].'&date='.$data['datp_up'].' " >ดูรายการ</a></td>

                                                ';
                                            }
                                            echo'
                                            </tr>
                                            ';
                                            }
                                            ?>
                                        </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End Body -->

    </body>

    </html>

<?php } else {
    header('location: index');
}
?>

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