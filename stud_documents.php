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
include("stud_pms_modal.php");
include("voiding_modal2.php");
$con = connection();
@$id = $_POST['OR_number'];
$sql = "SELECT * FROM mis_payment_method WHERE payment_desc='Documents' ORDER BY OR_number ASC";
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
                    <p class="p mb-0 text-primary " style="color:#07177a;">Data Capturing
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="5%" width="2%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    List of Paid Student
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="5%" width="2%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Documents
                    </p>
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
                            <a href="listofbalance.php" class="btn btn-success btn-sm" style="background-color:#07179a;" > <i class="fa fa-arrow-left">
                           </a></i><b>&nbsp; List of Documents </b>    
                            </h6>
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>OR No.</th>   
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Mode of Payment</th>
                                        <th>Date</th>
                                        <th>Type of Documents</th>
                                        <th>Payment Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>                       
                                        <td><?php echo $row['student_num'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['payment_type'];?></td>
                                         <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['document'];?></td>
                                        <td><?php echo $row['payment_desc'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td><?php echo $row['amount'];?></td>
                                        
                                       
                                        <div class="col-sm-12" >
                                        <input type="hidden" name="" > 
                                        </div>
                                        <td>
                                        <div class="btn-group" role="group">
                                         <a href="#" data-toggle="modal" data-target="#void<?php echo $row['OR_number']; ?>"
                                         class="btn btn-primary btn-sm" style="background-color: #07177a;">View</a>&nbsp;
                                         <a href="#" data-toggle="modal" data-target="#studedit<?php echo $row['OR_number']; ?>"
                                         class="btn btn-primary btn-sm" style="background-color: #07177a;">Edit</a>
                                         </div>
                                        </td>
                                    </tr>
                                    <?php }while($row = $result->fetch_assoc()); ?>
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
<?php
include ("script/script.php");
?>