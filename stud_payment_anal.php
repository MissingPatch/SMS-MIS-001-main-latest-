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
        <div class="card-body" style="height:100vh;">
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
                    Payment Method</p>
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

<div>
<div class="card border-left-primary">
<div class="card-body">
 
<center>
<p style="font-size: 20px;">&nbsp;
<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>

<b>&nbsp;Payment Method </b> &nbsp;
<a href="stud_all_paid.php" class="btn btn-success btn-sm"  style="background-color:#07179a;"><b><i class="bx bx-show"></i> All Payment</b></a>
</p>  </center>
</div>
</div>
<br>
</div>



    <?php

$sql = "SELECT * FROM pms_payment ORDER BY OR_number";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-image: url('image/bcp.png'); background-repeat: no-repeat; background-size: cover; opacity: 0.8;">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <div class="" style="font-size: 18px; font-family: Monospace; color: white; width: 100%; height: 95px; font-size: 15px;">
                        <b style="background-color: hsla(120, 100%, 25%, 0.3); border: 1px solid white; border-radius: 20px;">&nbsp; BCP Cashier &nbsp; </b> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: white; font-size: 30px;"><b><?php printf( $rowcount);?></b></div>
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

$sql = "SELECT * FROM mis_aub_payment WHERE payment_type ='AUB' ORDER BY OR_number";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" style="background-image: url('image/aub1.png'); background-repeat: no-repeat; background-size: cover; opacity: 0.8;">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body" >
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <div class="" style="font-size: 18px; font-family: Monospace; color: white; width: 100%; height: 95px; font-size: 15px;">
                        <b style="background-color: hsla(120, 100%, 25%, 0.3); border: 1px solid white; border-radius: 20px;">&nbsp; Asia United Bank</b> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: white; font-size: 30px;"><b><?php printf( $rowcount);?></b></div>
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

$sql = "SELECT * FROM mis_aub_payment WHERE payment_type ='Hello Money' ORDER BY OR_number";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>

    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2" style="background-image: url('image/hm1.png'); background-repeat: no-repeat; background-size: cover; opacity: 0.8;">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <div class="" style="font-size: 18px; font-family: Monospace; color: white; width: 100%; height: 95px; font-size: 15px;">
                        <b style="background-color: hsla(120, 100%, 25%, 0.3); border: 1px solid white; border-radius: 20px;">&nbsp; Hello Money App</b> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: white; font-size: 30px;"><b><?php printf( $rowcount);?></b></div>
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

$sql = "SELECT * FROM mis_payment_method WHERE payment_type ORDER BY student_num";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

?>
    <!-- analytics -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2" style="background-image: url('image/others.png'); background-repeat: no-repeat; background-size: cover; opacity: 0.8;">
        <a href="" style="text-decoration:none; color:black;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <center>
                        <div class="" style="font-size: 18px; font-family: Monospace; color: white; width: 100%; height: 95px; font-size: 15px;">
                        <b style="background-color: hsla(120, 100%, 25%, 0.3); border: 1px solid white; border-radius: 20px;">&nbsp; Other Payment Method</b> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: white; font-size: 30px;"><b><?php printf( $rowcount);?></b></div>
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