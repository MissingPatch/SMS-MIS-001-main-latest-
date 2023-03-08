<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){
    $stud_num = $_POST['stud_num'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email =  $_POST['email'];
    $mobilenum = $_POST['mobilenum'];


    $sql = "INSERT INTO `mis_stud_info` (`stud_num`, `fname` , `lname`, `email`, `mobilenum`) 
    VALUES ('$stud_num' , '$fname' , '$lname', '$email', '$mobilenum')";
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

