<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['role'])){
  $_SESSION['role'];
}
else{
 echo header("location:login.php");
}

include ("accesslevelsuperadmin.php");

include ("include/header.php");
include ("include/sidebar.php");

?>


        <div class="container-fluid">
        <div class="main-body">
        <!-- Content Row -->
        <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">


                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      
                      <!-- Page Heading -->
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary " style="color:#07177a;">Performance Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Enrolled Student</p>
                    <p class="p mb-0 ">
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        echo "". date('F j, Y ');
                    ?>
                    <span id="dateTime">
                    </p>

                    </div>

                    </div>
                    </div>
                    </div>
                    </div>


<?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSIT' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

<div>
<div class="card border-left-primary">
<div class="card-body">
 
<center>
<p style="font-size: 20px;">&nbsp;
<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>

<b>&nbsp;College Student Analytics </b> </p>  </center>
</div>
</div>
<br>
</div>





    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS Information Technology</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSEDUC' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS Education</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>


    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSCRIM' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS Criminology</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSOA' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS Office Administration</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
     
    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSBA' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS Business Administration</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>


    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSCRIM' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS HOSPITALITY MANAGEMENT</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>


    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSEE' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS ELEMENTARY EDUCATION</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
  

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSSE' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS SECONDARY EDUCATION</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSCE' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS COMPUTER ENGINEERING</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSTM' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS TOURISM MANAGEMENT</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSE' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS ENTREPRENEURSHIP</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BLIS' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BL INFORMATION SCIENCE</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSP' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS PSYCHOLOGY</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='BSAIS' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        BS ACCOUNTING INFORMATION SYSTEM</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

<div>
<div class="card border-left-primary">
<div class="card-body">
  
<center>
<p style="font-size: 20px;">&nbsp;
<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
<b>&nbsp;Senior High School Student Analytics </b> </p>  </center>
</div>
</div>
<br>
</div>


<?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='GAD' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>


    <!-- analytics shs -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        GENERAL ACADEMIC STRAND</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='ABAM' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        ACCOUNTANCY BUSINESS AND MANAGEMENT</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='HASS' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        HUMANITIES AND SOCIAL SCIENCES</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='STEAM' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        SCIENCE TECHNOLOGY ENGINEERING AND MATHEMATICS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='ICT' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        INFORMATION AND COMPUTER TECHNOLOGY</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='PA' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        PERFORMING ARTS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='HE' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        HOME ECONOMICS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <?php

$sql = "SELECT * FROM registrar_studentsection WHERE Course ='IA' ORDER BY Student_ID";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                        INDUSTRIAL ARTS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php printf( $rowcount);?></div>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
              
                    </div>
                    </div>
                    <?php
                    include ("footer.php");
                    ?>

                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    

 
<?php
include ("script/script.php");
?>