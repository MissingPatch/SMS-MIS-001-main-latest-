<?php
require_once ("../connection/connection.php");
$con = connection();

if(!isset($_SESSION)){
  session_start();
}

// Get user ID from session
@$id = $_SESSION['unique_id'];

// Update is_logged_in flag to false
$update_query = "UPDATE mis_student_users SET is_logged_in = 0 WHERE unique_id = $id";
$con->query($update_query);

// Log activity and destroy session
session_destroy();
header("Location: login.php");


?>
