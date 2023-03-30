<?php

include_once("connection/connection.php");
$con = connection();   
@$id = $_GET['Student_ID'];
$sql = "SELECT * FROM registrar_studentsection WHERE Student_ID ='$id'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    $Lastname = $_POST['Lastname'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Course = $_POST['Course'];
    $Year_Level = $_POST['Year_Level'];
    $Section = $_POST['Section'];
    $Semester = $_POST['Semester'];
    $Major = $_POST['Major'];
    $Academic_Year = $_POST['Academic_Year'];
    $Student_Type = $_POST['Student_Type'];
    $Status = $_POST['Status'];
    $Register_Date = $_POST['Register_Date'];
    $submitted_by = $_POST['submitted_by'];
   

    $sql = "UPDATE registrar_studentsection set Student_ID = '$Student_ID', Lastname = '$Lastname', Firstname = '$Firstname', Middlename = '$Middlename', Course = '$Course', Year_Level = '$Year_Level', Section = '$Section', Semester = '$Semester', Major = '$Major', Academic_Year = '$Academic_Year', Student_Type = '$Student_Type', Status = '$Status', Register_Date = '$Register_Date', submitted_by = '$submitted_by' WHERE Student_ID='$id' ";
    $con->query($sql) or die($con->error);

    
}


?>