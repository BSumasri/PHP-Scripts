<?php
// Check if the cookie is set for previous visits
if(isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
}
 else 
 {
    $visits = 1;
}

// Set the cookie for the current visit
setcookie('visits', $visits, time() + (86400 * 30), "/"); // Cookie valid for 30 days

// Display the number of previous visits
echo"<h1>Tracking Previous Page Visits</h1>";
echo "Number of previous visits: " . $visits;
?>
