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
include("addaccdepmodal.php");
include("editaccdepmodal.php");
include("deleteaccdep.php");
$con = connection();
$sql = "SELECT * FROM mis_man_inc_rep ORDER BY rep_id ASC";
$stud = $con->query($sql) or die($con->error);
$row = $stud->fetch_assoc();

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
                    <p class="p mb-0 text-primary " style="color:#07177a;">Management Inquries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department Report</p>
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
                           <a href="dep_reports.php" class="btn btn-success btn-sm" style="background-color:#07177a;">
                           <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp; Department Report </b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Reports_ID</th>
                                        <th>Type of Reports</th>
                                        <th>Description</th>
                                        <th>Department</th>           
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['rep_id'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['description'];?></td>                        
                                        <td><?php echo $row['department'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td>
                                            <form action=" "  method="POST" >
                                            <button href="#" id="myButton" 
                                            class="btn btn-success btn-sm" style="background-color:#07177a;">
                                            View
                                            </form>

                                            <script>
                                            $(document).ready(function() {
                                            $('#example').DataTable({
                                                "drawCallback": function() {
                                                if ($('#example').DataTable().data().count() == 0) {
                                                    $('#myButton').hide();
                                                } else {
                                                    $('#myButton').show();
                                                }
                                                }
                                            });
                                            });
                                            </script>

                                         </td>
                                    </tr>
                                    <?php }while($row = $stud->fetch_assoc()); ?>
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