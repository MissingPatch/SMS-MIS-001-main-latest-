<?php

include_once("connection/connection.php");
include ("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();


if(isset($_POST['add'])){
    $id = $_POST['ID'];
    $email = $_POST['email'];
    $pass = '123';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex =  $_POST['sex'];
    $mobilenum = $_POST['mobilenum'];
    $address = $_POST['home_address'];
    $dep = $_POST['department'];
    $role = $_POST['role'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT COUNT(*) AS count FROM mis_usermanagement WHERE email='$email'";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
       echo "<script>alert('Email already exists.')</script>";
    } else {
       
        $sql = "INSERT INTO `mis_usermanagement` (`email`, `pass` , `fname`, `lname`, `sex`,  `mobilenum`, `home_address`, `department`, `role`) 
        VALUES ('$email' , '$hashed_password' , '$fname', '$lname', '$sex', '$mobilenum' , '$address' ,'$dep','$role')";
        $con->query($sql) or die ($con->error);

        if ($con->query($sql) === TRUE) {
            $_SESSION['status'] = "Created Successfully";
            $_SESSION['status_deleteaccdep'] = "Successful";
            log_activity($_SESSION['ID'],$_SESSION['email'], "Add employees account with ID $id");
            header('Location: depacc.php');
    }
       
    }
}

?>


