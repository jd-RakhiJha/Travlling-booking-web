<?php
// Database connection
$host = 'localhost'; 
$username = 'root'; // Change 'username' to 'root' or your actual MySQL username
$password = ''; // Assuming no password; change if there is one
$database = 'booking-app'; 

// Create a connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
