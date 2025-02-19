<?php
$servername = "localhost";  // Change if needed
$username = "root";         // Change if needed
$password = "";             // Change if needed
$dbname = "travel_website"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
