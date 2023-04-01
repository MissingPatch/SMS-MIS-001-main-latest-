<?php
session_start(); // start the session

// unset all of the session variables
$_SESSION = array();
session_unset();
// destroy the session
session_destroy();

// redirect to the login page
header("Location: ../index.php");
exit;
?>