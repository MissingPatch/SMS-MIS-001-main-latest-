<?php
include ("connection/connection.php");
$con = connection();
session_start();

$id = $_SESSION['ID'];

$newAuth = $_POST['auth'];


$sql = "UPDATE mis_usermanagement SET auth = $newAuth WHERE id = $id";
$result = mysqli_query($con, $sql);
echo '<script>alert("Auth updated successfully!")</script>';

if (!$result) {
    echo "Error updating auth: " . mysqli_error($con);
} else {
    $_SESSION['auth'] = $newAuth;
    echo "Auth updated successfully!";
}
?>
