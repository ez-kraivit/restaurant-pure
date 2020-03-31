<?php
//ตรวจสอบทั้งหมด
$query1 = "SELECT
    COUNT(*)
FROM
    booking
WHERE
    username = '" . $_SESSION['members'] . "'
    ";
$count_m1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($count_m1)) {
    $total = $data['COUNT(*)'];
};

// ตรวจสอบ ยังไม่ชำระ
$query2 = "SELECT
    COUNT(*)
FROM
    booking
WHERE
    username = '" . $_SESSION['members'] . "' AND STATUS = '0'
    ";
$count_m2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($count_m2)) {
    $notbuy_order = $data['COUNT(*)'];
};

// ตรวจสอบชำระแล้ว
$query3 = "SELECT
    COUNT(*)
FROM
    booking
WHERE
    username = '" . $_SESSION['members'] . "' AND STATUS = '1'
    ";
$count_m3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($count_m3)) {
    $buy_order = $data['COUNT(*)'];
}

// ยังไม่ได้ชำระ
// $query4 = "SELECT
//     *
// FROM
//     booking
// WHERE
//     username = '" . $_SESSION['members'] . "' AND STATUS = '0'
//     order by datp_up asc
//     ";
$query4 = "SELECT
    *
FROM
    booking
WHERE
    username = '" . $_SESSION['members'] . "' 
    order by status desc,datp_up asc
    ";
$count_m4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));

// members
$query6 = "SELECT
    *
FROM
    members
WHERE
    username = '" . $_SESSION['members'] . "' 
    ";
$count_m6 = mysqli_query($conn, $query6) or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($count_m6)) {
    $email_p  = $data['email'];
    $phone_p  = $data['phone'];
    $fname_p = $data['firstname'];
    $lname_p =  $data['lastname'];
}
?>
