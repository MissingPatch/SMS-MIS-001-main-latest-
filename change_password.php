<?php

include_once("connection/connection.php");

$con = connection();   
if (isset($_GET['ID'])){ 
$id = $_GET['ID'];
$sql = "SELECT * FROM mis_usermanagement WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();

if(isset($_POST['update'])){
    
    $pass = $row['pass'];

    // Check if old password is equal to current password and new password and confirm password are equal
    if ($_POST['pass'] == $row['pass'] && $_POST['newpass'] == $_POST['confirmpass']) {
        $pass = $_POST['newpass'];
    }
    if($_POST['newpass'] != $_POST['confirmpass']){
        echo "<script>alert('Update Failed .');</script>";
    }
    else {
        $sql = "UPDATE mis_usermanagement SET pass = '$pass' WHERE ID='$id' ";
        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Password updated successfully.');</script>";
            exit();
        } else {
            echo "Error updating password: " . $con->error;
        }
    }
}
}
?>
