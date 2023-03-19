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
include_once("connection/connection.php");
$con = connection();


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
                    <p class="p mb-0 text-primary" style="margin-left:15px;">Managenment Inquiries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department Inquiries </p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="50px" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
                    <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
                    </svg>

                    <b>&nbsp;All Department Inquiries </b> </p>  </center>
                    </div>
                    </div>
                    <br>
                    </div>



                    <?php
                    $sql = "SELECT * FROM mis_categorize_inq WHERE department ='Learning Management System' ORDER BY inq_num";
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
                        <a href="dep_lms_inq.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <center>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                                        <b style="font-size: 11px;"> Learning Management System</b></div>
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
                    $sql = "SELECT * FROM mis_categorize_inq WHERE department ='Enrollment' ORDER BY inq_num";
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
                        <a href="dep_enr_inq.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <center>

                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                                        <b style="font-size: 11px;"> Enrollment </b></div>
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
                    $sql = "SELECT * FROM mis_categorize_inq WHERE department ='CRAD' ORDER BY inq_num";
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
                        <a href="dep_cra_inq.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <center>

                                        </svg>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                                        <b style="font-size: 11px;"> CRAD </b></div>
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
                    $sql = "SELECT * FROM mis_categorize_inq";
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
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <center>

                                        </svg>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 18px; font-family: Monospace;">
                                        <b style="font-size: 11px;"> All Inquiries </b></div>
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

                    <div class="row no-gutters align-items-center">
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>  </h5>

<?php

include_once("connection/connection.php");

$con = connection();
@$id = $_GET['inq_num'];
$sql = "SELECT * FROM mis_categorize_inq WHERE status='2' ORDER BY inq_num";
$res = $con->query($sql) or die($con->error);
$row = $res->fetch_assoc();

?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3"> Accepted Inquiries
                            <a href="dep_request.php" class="btn btn-sm" style="background:grey; float: right; color: white;"> Pending Inquiries </a>
                            </div>
                            <div class="card-body">
                    <div class="table-responsive">
                    <table id="example" class="table table-hover" style="width:100%">
                    <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Inquries ID</th>
                                                <th>Inquiries Type</th>
                                                <th>Department</th>           
                                                <th>Date Requested</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                        <?php $i=1; do{ 
                                            if (!empty($row)){ ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>  
                                                <td><?php echo $row['inq_num']; ?></td>
                                                <td><?php echo $row['inq_type']; ?></td>
                                                <td><?php echo $row['department']; ?></td>                        
                                                <td><?php echo $row['date_req']; ?></td>
                                                <td><?php echo "<p style='font-size: 12px; text-align: center; color: white; background: lightgreen; border-radius: 12px;'> Accept </p>"; ?></td>
                                                <td>
                
                                                <form action="delete_event.php"  method="POST">

                <a href="#" <?php echo $row['inq_num']; ?>" style="text-decoration: none; font-size: 20px;">
                <i class="bx bx-edit"></i>&nbsp;</a>

                <button style="border: none; background: none; color: red; font-size: 20px;" type="submit" name="delete"><i class="bx bx-trash"></i>&nbsp;</button>
                <input type="hidden" name="id" value="<?php echo $row["inq_num"];?>">
                </form>
                                                   
                                                </td>
                                            </tr>
                                            <?php }}while($row = $res->fetch_assoc())  ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
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

