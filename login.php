<?php
include 'db.php';

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<script>
        alert('Welcome $username to our Salt & Sand Resort');
        window.location.href='home.html';
        </script>";

    } else {
        echo "<script>alert('Invalid Login'); window.location.href='login.html';</script>";
    }

} else {
    echo "Access Denied";
}
?>