<?php
// Generic navbar conditional display 

if (isset($_SESSION['variable'])): ?>
    <!-- Content shown when session variable exists -->
<?php else: ?>
    <!-- Content shown when session variable does not exist -->
<?php endif; ?>
