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
include ("include/staffheader.php");
include ("include/staffsidebar.php");
include("categorize_inq_email.php");

$con = connection();
@$id = $_GET['inq_num'];
$sql = "SELECT * FROM mis_categorize_inq WHERE department='Learning Management System' ORDER BY inq_num='$id'";
$res = $con->query($sql) or die($con->error);
$row = $res->fetch_assoc();

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

                    <fieldset>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary" style="color:#07177a;">Management Inquries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department Inquiries</p>

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
                            <a href="staff_categorize_inq.php" class="btn btn-success btn-sm" style="background-color:#07179a;">
                            <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp;Learning Management System </b>  <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            </div>
                            
                                <div class="card-body">
                            
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Inquries ID</th>
                                                <th>Inquiries Type</th>
                                                <th>Department</th>           
                                                <th>Date Requested</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php do{ 
                                            if (!empty($row)){ ?>
                                       
                                            <tr>
                                                <td><?php echo $row['inq_num']; ?></td>
                                                <td><?php echo $row['inq_type']; ?></td>
                                                <td><?php echo $row['department']; ?></td>                        
                                                <td><?php echo $row['date_req']; ?></td>
                                                <td>
                                                    <form action="" method="POST">
                                                    <a href="#" class="btn btn-success btn-sm" style="background-color:#07177a;" data-toggle="modal" 
                                                    data-target="#inq" data-inqnum="<?php echo $row['inq_num']; ?>">View Details</a>
                                                       
                                                    <input type="hidden" name="inq_num" value="<?php echo $row['inq_num']; ?>"> 
                                                        <button class="btn btn-danger btn-sm" type="button">Remove</button>
                                                    </form>
                                                   
                                                </td>
                                            </tr>
                                            <?php }}while($row = $res->fetch_assoc())  ?>
                                        </tbody>
                                    </table>
                                    <script>
                                        $(document).ready(function() {
                                        $('#inq').on('show.bs.modal', function(e) {
                                            var inqNum = $(e.relatedTarget).data('inqnum');
                                            $(this).find('#inq-num').val(inqNum);
                                        });
                                        });

                                    </script>
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