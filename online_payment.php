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
@$id = $_POST['OR_number'];
$sql = "SELECT * FROM mis_aub_payment ORDER BY OR_number DESC";
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Online Payment</p>
                    
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a ');
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
<?php
include ("import_modal.php");
?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <b>Online Payment Record</b>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter7"  class="btn btn-success btn-sm" style="color: black; background: none; float: right;"><i class="bx bx-import"></i>&nbsp; Upload Data
                            </a> 
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>OR No.</th>   
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Course</th>
                                        <th>Section</th>
                                        <th>Year Level</th>
                                        <th>Payment Type</th>
                                        <th>Mode Of Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do {
                                    if (!empty($row)){?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>
                                        <td><?php echo $row['student_id'];?></td>
                                        <td><?php echo $row['Last_Name'];?>&nbsp;<?php echo $row['First_Name'];?></td>
                                        <td><?php echo $row['Course'];?></td>
                                        <td><?php echo $row['section'];?></td> 
                                        <td><?php echo $row['year_level'];?></td>
                                        <td><?php echo $row['particular'];?></td> 
                                        <td><?php echo $row['payment_type'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        
                                       
                                        <div class="col-sm-12" >
                    

                                        <input type="hidden" name="" > 
                                        </div>
                                        <td>
                                        <?php
                                        //include("stud_pms_modal.php");
                                        ?>
                                        <a href="#" data-toggle="modal" data-target="#studedit<?php echo $row['OR_number']; ?>"
                                        class="btn btn-primary btn-sm" style="background-color: #07177a;">View</a>
                                        </tr>
                                        </td>
                                    

                                    </tr>
                                    <?php }}while($row = $result->fetch_assoc()); ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                               
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>                                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>