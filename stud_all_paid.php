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

include_once("connection/connection.php");
include ("include/header.php");
include ("include/sidebar.php");


$con = connection();
$sql = "SELECT * FROM pms_payment WHERE OR_number";
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();



?>
                <div class="container-fluid">
                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary " style="color:#07177a;">Performance Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Payment History</p>
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
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <a href="stud_payment_anal.php" class="btn btn-success btn-sm" style="background-color:#07179a;">    
                            <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp; Payment History </b>           
                            </h6>
                            </div>
                          
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                    <th>OR No.</th>   
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Course</th>
                                        <th>Section</th>
                                        <th>Year Level</th>
                                        <th>Payment Type</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <!-- Loop through payments -->
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                      <tr>
                                        <td><?php echo $row['OR_number']; ?></td>
                                        <td><?php echo $row['student_id']; ?></td>
                                        <td><?php echo $row['Last_Name'] . ' ' . $row['First_Name']; ?></td>
                                        <td><?php echo $row['Course']; ?></td>
                                        <td><?php echo $row['section']; ?></td>
                                        <td><?php echo $row['year_level']; ?></td>
                                        <td><?php echo $row['particular']; ?></td>
                                        <td>

                                          <!-- Button to show modal -->
                                          <button type="button" style="color: white; background: #07177a;" class="btn btn-sm" data-toggle="modal" data-target="#paymentModal<?php echo $row['OR_number']; ?>">
                                            <i class="bx bx-show"></i> <b>View</b>
                                          </button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="paymentModal<?php echo $row['OR_number']; ?>" tabindex="-1" role="dialog" aria-labelledby="paymentModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="paymentModalTitle"><b>Payment Details</b></h5>
                                                </div>

                                    <img src="./images/logo.png" style="width: 190px; height: 200px; margin-left: 50%; margin-top: 30%; z-index: 1; position: absolute;">

                                    <p style="width: 190px; height: 200px; margin-left: 50%; margin-top: 15%; z-index: 1; position: absolute;"><b>BESTLINK COLLEGE OF &nbsp;&nbsp;&nbsp;&nbsp;THE PHILIPPINES</b></p>

                                                <div class="modal-body">
                                                  <p><b>OR Number: </b><?php echo $row['OR_number']; ?></p>
                                                  <p><b>Student ID: </b><?php echo $row['student_id']; ?></p>
                                                  <p><b>Name: </b><?php echo $row['Last_Name'] . ' ' . $row['First_Name']; ?></p>
                                                  <p><b>Course: </b><?php echo $row['Course']; ?></p>
                                                  <p><b>Section: </b><?php echo $row['section']; ?></p>
                                                  <p><b>Year Level: </b><?php echo $row['year_level']; ?></p>
                                                  <p><b>Semester: </b><?php echo $row['semester']; ?></p>
                                                  <p><b>Particular: </b><?php echo $row['particular']; ?></p>
                                                  <p><b>Date & Time: </b><?php echo $row['t_date']; ?> | <?php echo $row['t_time']; ?></p>
                                                  <p><b>Date & Time: </b><?php echo $row['paid_amount']; ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    <?php } ?>

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
                                                                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
?>