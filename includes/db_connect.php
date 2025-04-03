<?php
$host = "localhost";
$user = "root"; // DB user
$pass = "";
$db   = "users"; // DB name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
