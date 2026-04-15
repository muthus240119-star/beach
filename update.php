<?php
include 'db.php';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$location = $_POST['location'];
$room = $_POST['room'];
$total = $_POST['total'];

$sql = "UPDATE bookings 
        SET username='$username', email='$email', location='$location', room='$room', total='$total' 
        WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: admin_dashboard.php");
} else {
    echo "Error updating record";
}
?>