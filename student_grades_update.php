<?php

include_once("connection/connection.php");
$con = connection();   
@$id = $_GET['stud_num'];
$sql = "SELECT * FROM mis_stud_info WHERE stud_num ='$id'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $mobile = $_POST['mobilenum'];
    $ylvl = $_POST['ylvl'];
    $course = $_POST['course'];
   

    

    $sql = "UPDATE mis_stud_info set fname = '$fname', lname = '$lname', suffix = '$suffix',
    sex = '$sex',  email = '$email',  mobilenum = '$mobile',
    ylvl = '$ylvl', course = '$course'  WHERE stud_num='$id' ";
    $con->query($sql) or die($con->error);

    
}


?>