<?php
$username = $_GET['username'];
$room = $_GET['room'];
$total = $_GET['total'];
$location = $_GET['location'];

$date = date("d-m-Y");
$time = date("h:i A");
$booking_id = rand(10000,99999);

/* FORCE DOWNLOAD */
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=SaltSand_Receipt.html");
?>

<!DOCTYPE html>
<html>
<head>
<title>Receipt</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

.container{
    width:650px;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

/* HEADER */
.header{
    text-align:center;
    border-bottom:2px solid #0d2c4a;
    padding-bottom:10px;
}

.header h1{
    color:#0d2c4a;
    margin:0;
}

.header p{
    margin:5px 0;
}

/* SECTION */
.section{
    margin-top:20px;
}

.section h3{
    color:#0d2c4a;
    border-bottom:1px solid #ccc;
    padding-bottom:5px;
}

/* DETAILS */
.row{
    display:flex;
    justify-content:space-between;
    margin:8px 0;
    font-size:16px;
}

/* TOTAL */
.total{
    font-size:20px;
    font-weight:bold;
    color:green;
    text-align:right;
    margin-top:15px;
}

/* FOOTER */
.footer{
    text-align:center;
    margin-top:25px;
    color:#0d2c4a;
    font-weight:bold;
}

/* STATUS */
.status{
    text-align:center;
    color:green;
    font-size:18px;
    margin-top:10px;
}
</style>

</head>

<body>

<div class="container">

<!-- HEADER -->
<div class="header">
    <h1>Salt & Sand Resort</h1>
    <p>Luxury Beach Stay</p>
</div>

<!-- BOOKING INFO -->
<div class="section">
    <h3>Booking Details</h3>

    <div class="row"><span>Booking ID:</span><span><?php echo $booking_id; ?></span></div>
    <div class="row"><span>Name:</span><span><?php echo $username; ?></span></div>
    <div class="row"><span>Location:</span><span><?php echo $location; ?></span></div>
    <div class="row"><span>Room:</span><span><?php echo $room; ?></span></div>
    <div class="row"><span>Date:</span><span><?php echo $date; ?></span></div>
    <div class="row"><span>Time:</span><span><?php echo $time; ?></span></div>
</div>

<!-- PAYMENT -->
<div class="section">
    <h3>Payment Summary</h3>

    <div class="row"><span>Room Charges:</span><span>₹<?php echo $total; ?></span></div>
    <div class="row"><span>Tax:</span><span>Included</span></div>

    <div class="total">
        Total Paid: ₹<?php echo $total; ?>
    </div>
</div>

<!-- STATUS -->
<div class="status">
    ✔ Payment Successful
</div>

<!-- FOOTER -->
<div class="footer">
    Thank you for choosing Salt & Sand Resort! 🌊
</div>

</div>

</body>
</html>