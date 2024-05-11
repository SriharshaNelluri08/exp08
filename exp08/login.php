<?php
session_start();

// Record login time in session
$_SESSION['login_time'] = time();
echo "Login time recorded.";
?>
