<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "green_nflora";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>