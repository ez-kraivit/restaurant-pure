<?php
require './connection.php';
require './functions/Model_view.php';
$view = new Model_view();
$Show = $view->Titles();
// var_dump($Show);
// var_dump($Show['index']);
session_start();
$data = date("d/m/yy");
$dates = date("yy-m-d");
?>

<?php
if (isset($_SESSION['members'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Show['index'] ?></title>
        <?php require './head.php' ?>
    </head>

    <body>
        <div class="top">
            <?php require './navbar.php' ?>
        </div>
        <!-- End top -->
        <br>
        <div class="container">
            <!-- End steps -->
            <div class="row">
                <div class="columns">
                    <div class="column has-text-centered">
                        <label>Date:</label>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="date" placeholder="date" id="dates" name="dates">
                            </p>
                        </div>
                    </div>
                    <div class="column has-text-centered">
                        <label>Time:</label>
                        <div class="field">
                            <div class="select is-primary has-icons-left" id="times" name="time">
                                <select>
                                    <option value="17:00">ระยะเวลา 17:00</option>
                                    <option value="18:00">ระยะเวลา 18:00</option>
                                    <option value="19:00">ระยะเวลา 19:00</option>
                                    <option value="20:00">ระยะเวลา 20:00</option>
                                    <option value="21:00">ระยะเวลา 21:00</option>
                                    <option value="22:00">ระยะเวลา 22:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="column has-text-centered">
                        <label>People:</label>
                        <div class="field">
                            <div class="select is-primary has-icons-left" id="peoples" name="peoples">
                                <select>
                                    <option value="1">จำนวน 1 คน</option>
                                    <option value="2">จำนวน 2 คนขึ้นไป</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="column has-text-centered">
                        <br>
                        <button class="button is-danger  is-rounded" id="CheckBook">Check Avatablity</button>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row has-text-centered">
                    <h4><b>Avalitable tables tor 2 person(s) on <?php echo $data ?> at <?php echo $time = date("h:i a"); ?></b></h4>
                    <p>click on an avaliable table to book it</p>
                </div>
                <!-- End Row -->
                <div class="row" id="div1" style="display:none">
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                            <p class="title">เพลินพุง สกลนคร</p>
                            <p class="subtitle">ประเภท ชาบู</p>
                            <div class="content">
                                <div class="row">
                                    <div class="columns">
                                        <div class="column has-text-centered">
                                            Table1
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B1">จอง</button>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table2
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B2">จอง</button>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table3
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B3">จอง</button>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table4
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 2 ขึ้นไป</p>
                                            <button class="button is-small is-success" id="B4">จอง</button>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table5
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 2 ขึ้นไป</p>
                                            <button class="button is-small is-success" id="B5">จอง</button> <br>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row" id="div2">
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                            <p class="title">เพลินพุง สกลนคร</p>
                            <p class="subtitle">ประเภท ชาบู</p>
                            <div class="content">
                                <div class="row">
                                    <div class="columns">
                                        <div class="column has-text-centered">
                                            Table1
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B1_1">จอง</button> <br>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table2
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B2_2">จอง</button>
                                        </div>
                                        <div class="column has-text-centered">
                                            Table3
                                            <br>
                                            <img src="https://image.flaticon.com/icons/svg/1663/1663908.svg" style="height: 40px;">
                                            <p>Size: 1 คน</p>
                                            <button class="button is-small is-success" id="B3_3">จอง</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- End Row -->
                <!-- <div class="row">
                    <div class="table-container">
                        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>username</th>
                                    <th></th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>One</td>
                                    <td>Two</td>
                                    <td>One</td>
                                    <td>Two</td>
                                    <td>One</td>
                                </tr>
                            </tbody>
                    </div> -->
                </div>

            </div>

    </body>

    </html>

    <!-- if -->
<?php
} else {
    header("location:index");
}
?>
<script>
    jQuery(function() {
        var idt = "";

        jQuery("#B1").click(function() {
            idt = "Table1";
            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table1 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B1_1").click(function() {
            idt = "Table1";
            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table1 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B2").click(function() {
            idt = "Table2";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table2 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B2_2").click(function() {
            idt = "Table2";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table2 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B3").click(function() {
            idt = "Table3";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table3 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B3_3").click(function() {
            idt = "Table3";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table3 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B4").click(function() {
            idt = "Table4";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table4 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        jQuery("#B5").click(function() {
            idt = "Table5";

            jQuery(function() {
                Swal.fire("แจ้งเตือน", "คุณได้ทำการจอง Table5 | โปรดกด Check Avatablity", "info");
            });
            console.log(idt);
        });
        document.getElementById("dates").value = "<?php echo $dates ?>";
        jQuery("#CheckBook").click(function() {
            var dateid = ((jQuery('#dates').val()));
            var timeid = ((jQuery('#times :selected').val()));
            var peopleid = ((jQuery('#peoples :selected').val()));
            var username = ("<?php echo $_SESSION['members'] ?>");
            console.log(idt);
            if (idt.length > 1) {
                jQuery.post("checkbook.php", {
                    username: username,
                    dateid: dateid,
                    timeid: timeid,
                    peopleid: peopleid,
                    idt: idt
                }, function(data) {
                    console.log(data);
                    if (data.meg == "มีผู้จองแล้ว") {
                        jQuery(function() {
                            Swal.fire("แจ้งเตือน", "วันเวลาและจำนวนมีผู้จองแล้วไม่สามารถจองได้", "error");
                        });
                    } else {
                        jQuery(function() {
                            Swal.fire("แจ้งเตือน", "วันเวลาและจำนวนยังไม่มีผู้จองสามารถจองได้", "success");
                        });
                    }
                });
            } else {
                jQuery(function() {
                    Swal.fire("แจ้งเตือน", "ข้อมูลไม่ครบโปรดเลือกโต๊ะของท่าน | โปรดคลิก รายการจอง", "warning");
                });
            }
            // alert(username);
            // alert((jQuery('#peoples :selected').text()));
        });

        jQuery('#peoples').change(function() {
            const conceptName = jQuery('#peoples :selected').val();
            console.log(conceptName);
            if (conceptName == 2) {
                document.getElementById('div1').style.display = '';
                document.getElementById('div2').style.display = 'none';
            } else {
                document.getElementById('div1').style.display = 'none';
                document.getElementById('div2').style.display = '';
            }

        });
    });
</script>
<style scoped>

</style>