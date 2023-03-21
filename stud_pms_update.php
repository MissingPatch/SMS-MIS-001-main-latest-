<?php

include_once("connection/connection.php");
$con = connection();   
if(isset($_GET['OR_number'])){ 
$id = $_GET['OR_number'];
$sql = "SELECT * FROM mis_payment_method WHERE OR_number ='$id'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();
}
if(isset($_POST['update'])){
    $student_num = $_POST['student_num'];
    $name = $_POST['name'];
    $payment_type = $_POST['payment_type'];
    $date = $_POST['date'];
    $bal = $_POST['bal'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $course = $_POST['course'];

    $sql = "UPDATE mis_payment_method set student_num = '$student_num', name = '$name', payment_type = '$payment_type',
    date = '$date',  bal = '$bal',  semester = '$semester',
    year = '$year', course = '$course'  WHERE student_num='$id' ";
    $con->query($sql) or die($con->error);

}


?>