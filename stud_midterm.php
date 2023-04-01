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

$sql = "SELECT * FROM pms_payment WHERE particular IN ('Midterm') AND midterm ='Paid' ORDER BY OR_number";
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();
?>
                <div class="container-fluid">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body" style="height:100vh;">
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
                    Midterm
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
                            <a href="stud_misc.php" class="btn btn-success btn-sm"  style="background-color:#07179a;">
                            <i class="fa fa-home"></i>
                            </a></i><b>&nbsp; Miscellaneous Midterm</b> 
                            <a href="stud_midterm_exportData.php" class="btn" style="border: 1px solid red;"><i class="bx bx-export"></i> Download Midterm Paid Status </a> 
                            <a href="stud_finals.php" class="btn btn-success btn-sm"  style="background-color:#07179a; float:right;margin-left:5px;"> Finals </a>   
                            <a href="stud_midterm.php" class="btn btn-success btn-sm"  style="background-color:#07179a; float:right; margin-left:5px;";> Midterm </a>&nbsp;&nbsp;&nbsp;
                            <a href="stud_prelim.php" class="btn btn-success btn-sm"  style="background-color:#07179a; float:right;"> Prelim </a>&nbsp;&nbsp;&nbsp;  
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
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ 
                                        if (!empty($row)){?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>
                                        <td><?php echo $row['student_id'];?></td>
                                        <td><?php echo $row['Last_Name'];?>&nbsp;<?php echo $row['First_Name'];?></td>
                                        <td><?php echo $row['Course'];?></td>
                                        <td><?php echo $row['section'];?></td> 
                                        <td><?php echo $row['year_level'];?></td>
                                        <td><?php echo $row['particular'];?></td> 
                                        <td><?php echo $row['midterm'];?></td> 
                                        
                                       
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
                                    <?php }}while($row = $result->fetch_assoc()); ?>
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