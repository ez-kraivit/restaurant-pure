<?php
if (!empty($_POST)) {
    require './connection.php';
    $booking = $_POST['booking'];
    $username = $_POST['username'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $sql = "UPDATE booking SET status='1' WHERE booking_number='".$booking."' ";
    if ($conn->query($sql) === TRUE) {
        // echo "Record updated successfully";
        $sql2 = "UPDATE members SET firstname='".$firstname."' , lastname = '".$lastname."'  WHERE username='".$username."' ";
        if ($conn->query($sql2) === TRUE) {
            header('location:order');
        }else{
            header('location:order');
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    header('location:index');
}
