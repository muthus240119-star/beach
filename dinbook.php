<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dining = $_POST['dining_type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dining Booking Success</title>
<style>
body{
    background-image:url('b.png');
    background-size:cover;
    text-align:center;
    font-family:Arial;
}
.box{
    width:400px;
    margin:auto;
    margin-top:100px;
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:10px;
}
h2{
    color:green;
}
a{
    text-decoration:none;
    color:white;
    background:#0d2c4a;
    padding:10px 20px;
    border-radius:5px;
}
</style>
</head>

<body>

<div class="box">
    <h2>✅ Your Dining is Booked Successfully!</h2>
    
    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Dining Type:</b> <?php echo $dining; ?></p>
    <p><b>Date:</b> <?php echo $date; ?></p>
    <p><b>Time:</b> <?php echo $time; ?></p>
    <p><b>No of Guests:</b> <?php echo $guests; ?></p>

    <br>
    <a href="home.html">Go Back Home</a>
</div>

</body>
</html>