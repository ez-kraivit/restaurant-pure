<?php
// แสดงข้อมูลในร่ายการนั้น
$query5 = "SELECT
    *
FROM
    booking
WHERE
    username = '" . $username . "' AND booking_number = '".$booking."'
    order by datp_up asc
    ";
$count_m5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));
while ($data = mysqli_fetch_array($count_m5)) {
    $datp_up_p  = $data['datp_up'];
    $time_p  = $data['time'];
    $people_p  = $data['people'];
    $ids_p  = $data['ids'];
    $name_p  = $data['name'];
    $status_p = $data['status'];
}
?>