<?php

include_once("connection/connection.php");
include ("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['add'])){
    $id = $_POST['ID'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex =  $_POST['sex'];
    $mobilenum = $_POST['mobilenum'];
    $address = $_POST['home_address'];
    $dep = $_POST['department'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `mis_usermanagement` (`email`, `pass` , `fname`, `lname`, `sex`,  `mobilenum`, `home_address`, `department`, `role`) 
    VALUES ('$email' , '$pass' , '$fname', '$lname', '$sex', '$mobilenum' , '$address' ,'$dep','$role')";
    $con->query($sql) or die ($con->error);
    log_activity($_SESSION['ID'],$_SESSION['email'], "Add employees account with ID $id");
    header ('location: depacc.php');
}


if(isset($_POST['clear'])){
   // Clear the form data
   unset($_POST['add']);
   unset($_POST['ID']);
   unset($_POST['email']);
   unset($_POST['pass']);
   unset($_POST['fname']);
   unset($_POST['lname']);
   unset($_POST['sex']);
   unset($_POST['mobilenum']);
   unset($_POST['home_address']);
   unset($_POST['department']);
   unset($_POST['role']);

}


?>

