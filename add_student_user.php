<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){
    $user_id = $_POST['user_id'];
    $unique_id = $_POST['unique_id'];
    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `mis_student_users` (`user_id`, `unique_id`, `fname` , `lname`, `email`, `password`) 
    VALUES ('$user_id' , '$unique_id' , '$fname', '$lname', '$email', '$password')";
    $con->query($sql) or die ($con->error);
    header ('location: studinfor.php');
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

