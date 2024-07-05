<?php
$servername = "localhost";
$username = "james"; // Use your MySQL username
$password = "123456789"; // Use your MySQL password
$dbname = "bbldrizzy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
