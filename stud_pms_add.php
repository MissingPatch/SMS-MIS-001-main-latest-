<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){
    $OR_number = $_POST['OR_number'];
    $student_num = $_POST['student_num'];
    $name =  $_POST['name'];


    $sql = "INSERT INTO `mis_payment_method` (`OR_number`, `student_num` , `name`) 
    VALUES ('$OR_number' , '$student_num' , '$name')";
    $con->query($sql) or die ($con->error);

}


if(isset($_POST['clear'])){
   // Clear the form data
   unset($_POST['add']);
   unset($_POST['OR_number']);
   unset($_POST['student_num']);
   unset($_POST['name']);
}


?>

