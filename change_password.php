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
        $pass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
    }
    if($_POST['newpass'] != $_POST['confirmpass']){
        echo "<script>alert('Update Failed .');</script>";
    }
    else {
        $sql = "UPDATE mis_usermanagement SET pass = '$pass' WHERE ID='$id' ";
        if ($con->query($sql) === TRUE) {
            $_SESSION['status'] = "Password Changed!";
            log_activity($_SESSION['ID'],$_SESSION['email'], "Change Password ID $id");
            exit();
        } else {
            echo "Error updating password: " . $con->error;
        }
    }
}
}

?>
