<?php
$servername = "localhost"; // Database server
$username = "root"; // Your database username (default is "root" for local servers)
$password = ""; // Your database password (leave empty if there is no password)
$dbname = "touristguide_website"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
