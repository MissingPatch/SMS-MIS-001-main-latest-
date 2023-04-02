<?php

include_once("connection/connection.php");
include ("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();


if(isset($_POST['add'])){
    if(isset($_POST['ID'])){
    $id = $_POST['ID'];
    }
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex =  $_POST['sex'];
    $mobilenum = $_POST['mobilenum'];
    $address = $_POST['home_address'];
    $dep = $_POST['department'];
    $role = $_POST['role'];
    $access = $_POST['access_level'];
    $pass .= '#' . ucfirst(strtolower(substr($lname, 0, 2))) . '2023s';
    //$hashed_password = password_hash($pass, PASSWORD_BCRYPT);

    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT COUNT(*) AS count FROM mis_usermanagement WHERE email='$email'";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
       echo "<script>alert('Email already exists.')</script>";
    } else {
       
        $sql = "INSERT INTO `mis_usermanagement` (`email`, `pass` , `fname`, `lname`, `sex`,  `mobilenum`, `home_address`, `department`, `role` , `access_level`) 
        VALUES ('$email' , '$pass' , '$fname', '$lname', '$sex', '$mobilenum' , '$address' ,'$dep','$role','$access')";

        if ($con->query($sql) === TRUE) {
            $_SESSION['status'] = "Created Successfully";
            $_SESSION['status_deleteaccdep'] = "Successful";
            log_activity($_SESSION['ID'],$_SESSION['email'], "Add employees account with ID $id");
            echo "<meta http-equiv='refresh' content='0'>";
    }
       
    }
}

?>


