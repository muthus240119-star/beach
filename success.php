<?php
$username = $_GET['username'];
$room = $_GET['room'];
$total = $_GET['total'];
$location = $_GET['location'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Success</title>

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #0d2c4a, #1e5f8a);
    color:white;
    text-align:center;
}

/* CARD */
.container{
    width:400px;
    margin:auto;
    margin-top:100px;
    background:white;
    color:#0d2c4a;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

/* HEADER */
h2{
    color:#0d2c4a;
    margin-bottom:10px;
}

/* SUCCESS ICON */
.success{
    font-size:50px;
    color:green;
}

/* DETAILS */
.info{
    text-align:left;
    margin:10px 0;
    font-size:18px;
}

/* BUTTONS */
button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
}

/* DOWNLOAD BUTTON */
.download{
    background:#0d2c4a;
    color:white;
}

/* HOME BUTTON */
.home{
    background:green;
    color:white;
}

/* HOVER EFFECT */
button:hover{
    opacity:0.9;
}
</style>

</head>

<body>

<div class="container">

<div class="success">✔</div>

<h2>Booking Confirmed!</h2>

<p>Your stay at <b>Salt & Sand Resort</b> is successfully booked 🎉</p>

<div class="info">👤 Name: <?php echo $username; ?></div>
<div class="info">📍 Location: <?php echo $location; ?></div>
<div class="info">🏨 Room: <?php echo $room; ?></div>
<div class="info">💰 Total Paid: ₹<?php echo $total; ?></div>

<!-- BUTTONS -->

<button class="download" onclick="downloadReceipt()">
📄 Download Receipt
</button>

<button class="home" onclick="goHome()">
🏠 Go to Home
</button>

</div>

<script>
function downloadReceipt(){
    window.location.href = "receipt.php?username=<?php echo $username; ?>&room=<?php echo $room; ?>&total=<?php echo $total; ?>&location=<?php echo $location; ?>";
}

function goHome(){
    window.location.href = "home.html";
}
</script>

</body>
</html>