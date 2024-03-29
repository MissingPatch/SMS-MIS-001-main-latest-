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
include("categorize_inq_email.php");

$con = connection();
@$id = $_GET['OR_number'];
$sql = "SELECT * FROM crad_pay WHERE particular IN ('Research') AND year_level ='4th Year' ORDER BY OR_number";
$res = $con->query($sql) or die($con->error);
$row = $res->fetch_assoc();

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

                    <fieldset>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary" style="color:#07177a;">Management Inquries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="5%" width="3%" preserveAspectRatio="xMidYMid meet" focusable="false">
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
                    
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b> Department Inquiries </b></h5>
                    <p> </p>
                    
<?php
include ("import_modal.php");
?>

                    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            &nbsp;<a href="dep_inquiries.php" class="btn btn-success btn-sm" style="background-color:#07177a;">
                            <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp;CRAD Inquiries</b>
                            
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"  class="btn btn-success btn-sm" style="color: black; background: none; float: right;"><i class="bx bx-import"></i>&nbsp; Upload Data
                            </a>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php do{ 
                                            if (!empty($row)){ ?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>
                                        <td><?php echo $row['student_id'];?></td>
                                        <td><?php echo $row['Last_Name'];?>&nbsp;<?php echo $row['First_Name'];?></td>
                                        <td><?php echo $row['Course'];?></td>
                                        <td><?php echo $row['section'];?></td> 
                                        <td><?php echo $row['year_level'];?></td>
                                        <td><?php echo $row['particular'];?></td> 
                                        <td><?php echo "<p style='width: 55px; font-size: 12px; text-align: center; color: white; background: lightgreen; border-radius: 12px;'> Paid </p>";?></td>
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
                                    </div>    
                                    </div>
                                    </div>
                                    </div>
                                    <?php include ("footer.php"); ?>
                                    </div>
                                    </div>
                                    </div>
<?php
include ("script/script.php");
?>