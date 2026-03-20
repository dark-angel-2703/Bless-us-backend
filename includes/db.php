<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bless_us_wedding";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
