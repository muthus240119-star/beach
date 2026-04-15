<?php

$username = $_POST['username'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$members = $_POST['members'];
$room = $_POST['room'];
$location = $_POST['location'];

/* PRICE */
if($room=="Normal") $price=2000;
elseif($room=="Deluxe") $price=4000;
elseif($room=="Luxury") $price=6000;
else $price=9000;

$total = $price * $members;

/* REDIRECT */
header("Location: payment.php?username=$username&email=$email&checkin=$checkin&checkout=$checkout&members=$members&room=$room&total=$total&location=$location");
?>