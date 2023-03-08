<?php 

if (isset($_POST['create'])) {
	include "mobile_conn.php";
	include_once("connection/connection.php");

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$student_num = validate($_POST['student_num']);
	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	/* $password = validate($_POST['role']); */

	$user_data = 'student_num='.$student_num. '&fname='.$fname. '&lname='.$lname;
	

	if (empty($student_num)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}

       $sql = "INSERT INTO mis_payment_method (student_num, fname, lname) 
               VALUES('$student_num', '$fname', '$lname')";
       $result = mysqli_query($conn, $sql);

	}

	?>