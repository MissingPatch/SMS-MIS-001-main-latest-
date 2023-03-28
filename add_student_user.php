<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){

    $unique_id = $_POST['unique_id'];
    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($_POST['password']);


    $sql = "INSERT INTO `mis_stud_users` (`unique_id`, `fname` , `lname`, `email`, `password`) 
    VALUES ('$unique_id' , '$fname', '$lname', '$email', '$password')";
    $con->query($sql) or die ($con->error);
    header ('location: student_account.php');
}


?>

