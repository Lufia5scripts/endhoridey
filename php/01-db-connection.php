<?php
// Database connection snippet

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
