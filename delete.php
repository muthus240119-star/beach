<?php
include 'db.php';

$id = $_POST['id'];

$conn->query("DELETE FROM bookings WHERE id=$id");

header("Location: admin_dashboard.php");
?>