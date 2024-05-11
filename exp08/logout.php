<?php
session_start();

// Check if login time is set
if (isset($_SESSION['login_time'])) {
    $loginTime = $_SESSION['login_time'];
    $logoutTime = time();
    
    // Calculate active duration
    $duration = $logoutTime - $loginTime;
    $minutes = floor($duration / 60);
    $seconds = $duration % 60;
    
    echo "Active Duration: $minutes minutes $seconds seconds";
    
    // Unset login time session variable
    unset($_SESSION['login_time']);
} else {
    echo "Please login first";
}
?>
