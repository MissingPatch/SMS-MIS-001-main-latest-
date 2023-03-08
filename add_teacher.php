<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `mis_teacher_information` (`ID`, `name` , `email`, `phone_number`, `password`) 
    VALUES ('$ID' , '$name' , '$email', '$phone_number', '$password')";
    $con->query($sql) or die ($con->error);
    header ('location: teacher_information.php');
}


if(isset($_POST['clear'])){
   // Clear the form data
   unset($_POST['add']);
   unset($_POST['ID']);
   unset($_POST['name']);
   unset($_POST['email']);
   unset($_POST['phone_number']);
   unset($_POST['password']);
}


?>

