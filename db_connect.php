<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "reprocare";   // apna database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>