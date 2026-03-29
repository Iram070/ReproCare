<?php
session_start();
include("db.php");

$user_id = $_SESSION['user_id'];

$last_period = $_POST['last_period_date'];
$cycle_length = $_POST['cycle_length'];
$period_duration = $_POST['period_duration'];
$flow_type = $_POST['flow_type'];
$pain_level = $_POST['pain_level'];

$query = "INSERT INTO cycle_data 
(user_id,last_period_date,cycle_length,period_duration,flow_type,pain_level)
VALUES
('$user_id','$last_period','$cycle_length','$period_duration','$flow_type','$pain_level')";

mysqli_query($conn,$query);

// redirect to calendar
header("Location: calendar.php");
exit();
?>