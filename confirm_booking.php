<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$members = $_POST['members'];
$room = $_POST['room'];
$total = $_POST['total'];
$location = $_POST['location'];

$sql = "INSERT INTO bookings (username,email,checkin,checkout,members,room,total,location)
VALUES ('$username','$email','$checkin','$checkout','$members','$room','$total','$location')";

if($conn->query($sql)==TRUE){
    header("Location: success.php?username=$username&room=$room&total=$total&location=$location");
} else {
    echo "Error: ".$conn->error;
}
?>