<?php

if(!isset($_SESSION)){
    session_start();
} 

include_once("connection/connect.php");
$conn = index();
if(isset($_POST['addstud'])){

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $suffix = $_POST['suffix'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birth_date = $_POST['birth_date'];
    $course = $_POST['course'];
    $citizenship = $_POST['citizenship'];
    $contact_number = $_POST['contact_number'];
    $guardian_info = $_POST['guardian_info'];
    $guardian_contact = $_POST['guardian_contact'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $zip = $_POST['zip'];
    $last_school_att = $_POST['last_school_att'];
    $school_yr = $_POST['school_yr'];
    $school_type = $_POST['school_type'];
    $status = "Pending";
    $payment_status="Unpaid";
    $sql = "INSERT INTO `oes_student_application` (`firstname`, `middlename`, `lastname`, `suffix`, `email`, `gender`, 
    `age`, `birth_date`, `course`, `citizenship`, `contact_number`, `guardian_info`, `guardian_contact`,
    `address`, `province`, `zip`, `last_school_att`, `school_yr`, `school_type`, `status`, `payment_status`)
    VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$email', '$gender', '$age', '$birth_date', '$course', '$citizenship'
    ,'$contact_number', '$guardian_info', '$guardian_contact', '$address', '$province', '$zip', '$last_school_att', '$school_yr', '$school_type', 
    '$status', '$payment_status')";
    $conn->query($sql) or die ($conn->error);
    
} 


