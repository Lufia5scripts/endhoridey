<?php
// SQL INSERT snippet for adding a user

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$conn->query($sql);
?>
