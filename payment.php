<?php
$username = $_GET['username'];
$email = $_GET['email'];
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$members = $_GET['members'];
$room = $_GET['room'];
$total = $_GET['total'];
$location = $_GET['location']; // 
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>

<style>
body{
    background-image: url(b.png);
    height: 86vh;
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
    text-align:center;
}

h2{
    color:#0d2c4a;
}

.box{
    width:400px;
    background:rgba(255,255,255,0.6);
    padding:30px;
    border-radius:10px;
    margin:auto;
}

input{
    margin:10px 0;
    height:35px;
    width:100%;
    padding:5px;
}

button{
    padding:10px;
    background:#0d2c4a;
    color:white;
    border:none;
    border-radius:5px;
}

p{
    color:#0d2c4a;
    text-align:left;
}

.info {
    font-size: 18px;
    color: #0d2c4a;
    margin: 5px 0;
}
</style>
</head>

<body>

<br><br>

<div class="box">

<h2>Make Payment</h2>

<p class="info">Name: <?php echo $username; ?></p>
<p class="info">Email: <?php echo $email; ?></p>
<p class="info">Location: <?php echo $location; ?></p> <!-- ✅ NOW WORKS -->
<p class="info">Room: <?php echo $room; ?></p>
<p class="info">Total Amount: ₹<?php echo $total; ?></p>

<form action="confirm_booking.php" method="POST">

<!-- hidden data -->
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
<input type="hidden" name="checkout" value="<?php echo $checkout; ?>">
<input type="hidden" name="members" value="<?php echo $members; ?>">
<input type="hidden" name="room" value="<?php echo $room; ?>">
<input type="hidden" name="total" value="<?php echo $total; ?>">
<input type="hidden" name="location" value="<?php echo $location; ?>"> <!-- ✅ IMPORTANT -->

<input type="text" placeholder="Address" required>
<input type="text" placeholder="Mobile Number" required>
<input type="text" placeholder="Pincode" required>

<input type="text" id="card" placeholder="Card Number" required>
<input type="text" id="cvv" placeholder="CVV" required>

<button type="submit" onclick="return validate()">Pay Now</button>

</form>

</div>

<script>
function validate(){
    let card = document.getElementById("card").value;
    let cvv = document.getElementById("cvv").value;

    if(card.length < 12){
        alert("Invalid Card Number");
        return false;
    }

    if(cvv.length != 3){
        alert("Invalid CVV");
        return false;
    }

    alert("Payment Successful");
    return true;
}
</script>

</body>
</html>