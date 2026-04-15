<?php
include 'db.php';

/* FETCH BOOKINGS */
$result = $conn->query("SELECT * FROM bookings ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

/* HEADER */
.header{
    background:#0d2c4a;
    color:white;
    padding:15px;
    text-align:center;
    font-size:22px;
    position:relative;
}

/* LOGOUT BUTTON */
.logout{
    position:absolute;
    right:20px;
    top:10px;
    background:#ff9800;
    color:white;
    padding:8px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

/* CONTAINER */
.container{
    width:95%;
    margin:auto;
    margin-top:20px;
}

/* TABLE */
table{
    width:100%;
    border-collapse: collapse;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

th, td{
    padding:12px;
    border:1px solid #ddd;
    text-align:center;
}

th{
    background:#0d2c4a;
    color:white;
}

/* BUTTONS */
button{
    padding:6px 12px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

/* EDIT */
.edit{
    background:green;
    color:white;
}

/* DELETE */
.delete{
    background:red;
    color:white;
}

/* HOVER */
button:hover{
    opacity:0.9;
}

/* SEARCH */
.search-box{
    margin-bottom:15px;
    text-align:right;
}

input[type="text"]{
    padding:8px;
    width:250px;
}
</style>

</head>

<body>

<div class="header">
    Admin Dashboard - Salt & Sand Resort
    <button class="logout" onclick="logout()">Logout</button>
</div>

<div class="container">

<!-- SEARCH -->
<div class="search-box">
<input type="text" id="searchInput" placeholder="Search by name..." onkeyup="searchTable()">
</div>

<table id="bookingTable">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Location</th>
<th>Room</th>
<th>Total (₹)</th>
<th>Action</th>
</tr>

<?php
if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['room']; ?></td>
<td><?php echo $row['total']; ?></td>

<td>
<!-- EDIT -->
<a href="edit.php?id=<?php echo $row['id']; ?>">
<button class="edit">Edit</button>
</a>

<!-- DELETE -->
<form method="POST" action="delete.php" style="display:inline;" onsubmit="return confirmDelete();">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<button type="submit" class="delete">Delete</button>
</form>
</td>
</tr>

<?php
    }
} else {
    echo "<tr><td colspan='7'>No bookings found</td></tr>";
}
?>

</table>

</div>

<script>

/* LOGOUT */
function logout(){
    window.location.href="home.html";
}

/* DELETE CONFIRMATION */
function confirmDelete(){
    return confirm("Are you sure you want to delete this booking?");
}

/* SEARCH FUNCTION */
function searchTable(){
    let input = document.getElementById("searchInput").value.toLowerCase();
    let table = document.getElementById("bookingTable");
    let tr = table.getElementsByTagName("tr");

    for(let i=1; i<tr.length; i++){
        let td = tr[i].getElementsByTagName("td")[1];
        if(td){
            let txtValue = td.textContent || td.innerText;
            tr[i].style.display = txtValue.toLowerCase().includes(input) ? "" : "none";
        }
    }
}
</script>

</body>
</html>