<?php
$admin_user = "admin";
$admin_pass = "789789";

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $admin_user && $password === $admin_pass){
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Wrong Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>
body{
        background-image: url(l.png);
        height: 70vh;
        background-repeat: no-repeat;
        background-size:cover;
        background-position: center;
        text-align: center;
}
.box{
        width: 400px;
        background: rgba(255,255,255,0.6);
        padding: 30px;
        border-radius: 10px;
        margin: auto;
        margin-top:180px;
        align-items: center;
}
input{
    width:100%;
    margin:10px 0;
    height:35px;
}
button{
    width:100%;
    padding:10px;
    background:#0d2c4a;
    color:white;
    border:none;
}
.error{
    color:red;
}
</style>
</head>

<body>

<div class="box">

<h2>Admin Login</h2>

<?php if(isset($error)){ ?>
<p class="error"><?php echo $error; ?></p>
<?php } ?>

<form method="POST" action="admin.php">

<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

</div>

</body>
</html>