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
    $status = $_GET['status'];
    $datp_up_p = $_GET['date'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Show['order-detail'] ?></title>
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
                                                <b>Date and time :</b>
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
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Title :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p>Mr.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>First name :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p><?php echo $fname_p ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Last name :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p><?php echo $lname_p ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Phone :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p><?php echo $fname_p ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Email :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p><?php echo $lname_p ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Pice :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p>299.00 THB</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-right">
                                                <b>Payment method :</b>
                                            </div>
                                            <div class="column has-text-left">
                                                <p>Cash</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://localhost/restaurant/order-detail?booking=<?php echo $booking ?>&status=<?php echo $status ?>&date=<?php echo $datp_up_p ?>" title="เพื่อการศึกษา" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <div class="column has-text-centered">
                                            <button class="button is-danger is-fullwidth" id="Btnback">Back</button>
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
        jQuery("#Btnback").click(function() {
            window.location.href = 'order';
        });
    });
</script>