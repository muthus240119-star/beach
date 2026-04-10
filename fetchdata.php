<?php
include 'db.php';

echo "<h2>Users</h2>";

$res = $conn->query("SELECT * FROM users");

while($row = $res->fetch_assoc()){
    echo $row['username']." - ".$row['email']."<br>";
}

echo "<h2>Bookings</h2>";

$res2 = $conn->query("SELECT * FROM bookings");

while($row = $res2->fetch_assoc()){
    echo $row['username']." | ".$row['checkin']." | ".$row['checkout']."<br>";
}
?>