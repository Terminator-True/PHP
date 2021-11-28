<?php
$servername = "localhost";
$username = "admin";
$password = "Admin@123";

$conn = new mysqli ($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>