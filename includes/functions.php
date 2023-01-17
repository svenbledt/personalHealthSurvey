<?php
$URI = $_SERVER['REQUEST_URI'];
if (str_contains($URI, '/_pages/') || str_contains($URI, '/img/') || str_contains($URI, '/includes/') || str_contains($URI, '/js/')) {
    header('Location: index.php');
}

// Session Controller
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset(); // unset $_SESSION variable for the run-time 
    session_destroy(); // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>