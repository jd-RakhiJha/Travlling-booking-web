<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

echo "<h1>Welcome, " . $_SESSION['email'] . "!</h1>";
echo "<p>This is the admin dashboard.</p>";
echo "<a href='logout.php'>Logout</a>";
