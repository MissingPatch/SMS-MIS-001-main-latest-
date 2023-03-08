<?php

include_once("connection/connection.php");
$con = connection();   
@$unique_id = $_GET['unique_id'];
$sql = "SELECT * FROM mis_student_users WHERE unique_id ='$unique_id'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
   

    $sql = "UPDATE mis_student_users set unique_id = '$unique_id', fname = '$fname', lname = '$lname', email = '$email', password = '$password',  status = '$status' WHERE unique_id='$unique_id' ";
    $con->query($sql) or die($con->error);

    
}


?>