<?php

include_once("connection/connection.php");
$con = connection();   
@$ID = $_GET['ID'];
$sql = "SELECT * FROM mis_teacher_information WHERE ID ='$ID'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
    $subject = $_POST['subject'];
    $class_schedule = $_POST['class_schedule'];
    $room_assignment = $_POST['room_assignment'];
    $employment_status = $_POST['employment_status'];
    $hire_date = $_POST['hire_date'];
    $salary = $_POST['salary'];
    $education_level = $_POST['education_level'];
    $certification = $_POST['certification'];
    $company = $_POST['company'];
    $sex = $_POST['sex'];
   

    
    $sql = "UPDATE mis_teacher_information set ID = '$ID', name = '$name', email = '$email',
    phone_number = '$phone_number',  department = '$department',  subject = '$subject', class_schedule = '$class_schedule', room_assignment = '$room_assignment', employment_status = '$employment_status', hire_date = '$hire_date', salary = '$salary', education_level = '$education_level', certification = '$certification', company = '$company', sex = '$sex' WHERE ID='$ID' ";
    $con->query($sql) or die($con->error);

    
}
?>