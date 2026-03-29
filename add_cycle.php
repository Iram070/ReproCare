<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit'])){
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date'];
    $length = $_POST['length'];

    if($length >= 21 && $length <= 35){
        $status = "Regular";
    } else {
        $status = "Irregular";
    }

    mysqli_query($conn,"INSERT INTO cycles(user_id,cycle_date,cycle_length,status)
    VALUES('$user_id','$date','$length','$status')");

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Cycle</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    font-family:Poppins;
    background:linear-gradient(135deg,#fde2f3,#e6e6fa);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

form{
    background:white;
    padding:30px;
    border-radius:20px;
    width:300px;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:10px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:10px;
    background:#ff4d88;
    color:white;
    border:none;
    border-radius:10px;
}
</style>
</head>
<body>

<form method="POST">
<h3>Add Cycle</h3>
<input type="date" name="date" required>
<input type="number" name="length" placeholder="Cycle Length (days)" required>
<button name="submit">Save</button>
</form>

</body>
</html>