<?php
// Destroy session and redirect

session_start();
session_destroy();
header("Location: page.php");
exit();
?>
