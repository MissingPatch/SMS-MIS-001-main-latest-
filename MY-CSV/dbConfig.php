<?php
// Database configuration
$dbHost     = "217.21.88.1";
$dbUsername = "u476821515_SMS";
$dbPassword = "Bcpsms12@";
$dbName     = "u476821515_SMS";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}