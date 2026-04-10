<?php
$username = $_GET['username'];
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome <?php echo $username; ?> to Salt & Sand Resort</h2>

<br>

<a href="booking.html?username=<?php echo $username; ?>">Book Now</a>

<br><br>

<!-- STEP 4 -->
<a href="user_history.php?username=<?php echo $username; ?>">
View My Bookings
</a>

</body>
</html>