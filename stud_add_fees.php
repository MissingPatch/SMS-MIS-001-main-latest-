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
include("stud_add_fees_modal.php");
include("stud_edit_fees_modal.php");
include("stud_delete_fees.php");
$con = connection();

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
                    Other Fees
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
                            <a href="listofbalance.php" class="btn btn-success btn-sm"  style="background-color:#07179a;">
                            <i class="fa fa-arrow-left"> </a></i><b>&nbsp; Student Fees </b>  
                          
                            <button type="button" class="btn btn-success btn-sm" style="background-color:#07177a; float: right;" data-toggle="modal" data-target="#addfee" 
                            style="background-color:#07177a; color:white; "><i class="bx bxs-add-to-queue"></i> Add Fee's </button>     
                            </h6>
                            </div>

                             <?php    
                                $ql = "SELECT * FROM pms_student_fees ORDER BY number_of_studentFees DESC";                    
                                $result = $con->query($ql) or die($con->error);
                                $row = $result->fetch_assoc();
                             ?>
                             
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Number</th>									
                                        <th>Course</th>
                                        <th>Year_level</th>
                                        <th>Amount </th>
                                        <th>Particular</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ 
                                        if (!empty($row)){?>
                                        <tr>
                                            <td><?php echo $row["number_of_studentFees"]; ?> </td>	
                                            <td><?php echo $row["course"]; ?></td>
                                            <td><?php echo $row["year_level"]; ?></td>
                                            <td><?php echo $row["amount"]; ?></td>
                                            <td><?php echo $row["particular"]; ?></td>
                                            <td><?php echo $row["details"]; ?></td>                 

                                        </div>
                                        <td>
                                       
                                        <div class="btn-group" role="group">
                                        <a href="#" data-toggle="modal" data-target="#editfee<?php echo $row['number_of_studentFees'];?>"
                                        class="btn btn-primary btn-sm" style="background-color: #07177a;"><i class="bx bx-edit"></i> Edit</a>&nbsp;
                                        <form action="" method="POST">                
                                        <button type="submit" class="btn btn-danger btn-sm" name="delete"><i class="bx bx-trash"></i></button>
                                        <input type="hidden" name="number_of_studentFees" value="<?php echo $row["number_of_studentFees"];?>">
                                        </form>
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

                                    
                                               
<?php
include ("script/script.php");
include ("include/sweetalert.php");
?>