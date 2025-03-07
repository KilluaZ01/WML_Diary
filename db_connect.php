<?php
$servername = "localhost";
$username = "root";
$password = ""; // I deleted my password. Make sure you add your own password.
$dbname = "personal_diary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
