<?php
include ("connection/connection.php");
include ("activity_log_backend.php");
$con = connection();
session_start();

$id = $_SESSION['ID'];

$newAuth = $_POST['auth'];


$sql = "UPDATE mis_usermanagement SET auth = $newAuth WHERE ID = $id";
$result = mysqli_query($con, $sql);
echo "<script>alert('Auth updated successfully!')</script>";

if (!$result) {
    echo "Error updating auth: " . mysqli_error($con);
    log_activity($_SESSION['ID'],$_SESSION['email'], "Disable Authentication ID $id");
} else {
    log_activity($_SESSION['ID'],$_SESSION['email'], "Enable Authentication ID $id");
    echo "Auth updated successfully!";
}
?>

