<?php
// Generic SQL SELECT pattern (no real table or fields)

$query = "SELECT * FROM table_name WHERE column1 = '$variable1' AND column2 = '$variable2'";
$result = $conn->query($query);
?>
