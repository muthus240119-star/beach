<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM bookings WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Booking</title>

<style>
body{
    background:#f4f4f4;
    font-family:Arial;
}
.box{
    width:400px;
    margin:auto;
    margin-top:50px;
    background:white;
    padding:30px;
    border-radius:10px;
}
input, select{
    width:100%;
    height:40px;
    margin:10px 0;
}
button{
    padding:10px;
    background:#0d2c4a;
    color:white;
    border:none;
    width:100%;
}
</style>

</head>

<body>

<div class="box">
<h2>Edit Booking</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input type="text" name="username" value="<?php echo $row['username']; ?>" required>

<input type="email" name="email" value="<?php echo $row['email']; ?>" required>

<input type="text" name="location" value="<?php echo $row['location']; ?>" required>

<input type="text" name="room" value="<?php echo $row['room']; ?>" required>

<input type="number" name="total" value="<?php echo $row['total']; ?>" required>

<button type="submit">Update</button>

</form>

</div>

</body>
</html>