<?php
// Session Controller
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset(); // unset $_SESSION variable for the run-time 
    session_destroy(); // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

// Home POST collector
if (isset($_POST['range1'])) {
    $_SESSION['range_home'] = $_POST['range1'];
}

// Question2 collector
if (isset($_POST)) {
    if ($_POST['noIDont'] == true) {
        $_SESSION['additionals'] = false;
    } else if ($_POST['yesIDo'] == true) {
        $_SESSION['additionals'] = true;
    }
}

//Question3 collector
if (isset($_POST['range2'])) {
    $_SESSION['range_3'] = $_POST['range2'];
}

// Question4 collector
if (isset($_POST['btnradio'])) {
    $_SESSION['plus_activity'] = $_POST['btnradio'];
}
if (isset($_POST['custom_a'])) {
    $_SESSION['custom_a'] = $_POST['custom_a'];
}

// Question5 collector
if (isset($_POST['range3'])) {
    $_SESSION['range_5'] = $_POST['range3'];
}

// Question6 collector
if (isset($_POST['microwave'])) {
    $_SESSION['meals_kh'] = $_POST['microwave'];
}

// Question7 collector
if (isset($_POST['microwave2'])) {
    $_SESSION['meals_pro'] = $_POST['microwave2'];
}

// Question8 collector
if (isset($_POST['microwave3'])) {
    $_SESSION['meals_veg'] = $_POST['microwave3'];
}

// Question9 collector
if (isset($_POST['microwave4'])) {
    $_SESSION['meals_fr'] = $_POST['microwave4'];
}

// Question10 collector
if (isset($_POST['microwave5'])) {
    $_SESSION['meals_mw'] = $_POST['microwave5'];
}
?>