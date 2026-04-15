<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.html"); // ✅ redirect to login page
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>