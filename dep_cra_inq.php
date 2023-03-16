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
@$id = $_GET['inq_num'];
$sql = "SELECT * FROM mis_payment_method WHERE payment_desc IN ('Research') AND status ='Paid' ORDER BY OR_number";
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
                    
                    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                        <form action="MY-CSV/dep_research_importData.php" method="post" enctype="multipart/form-data">
                            &nbsp;<a href="dep_inquiries.php" class="btn btn-success btn-sm" style="background-color:#07177a;">
                            <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp;CRAD Inquiries</b>
                            <input type="file" name="file" />
                        <i class="bx bx-import"></i>
                        <input style="border: 1px solid green;" type="submit" class="btn" name="importSubmit" value="Submit">
                        </form>
                            </div>
                            
                                <div class="card-body">
                            
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover" style="width:100%">
                                        <thead>
            <tr>
                <th>Student ID</th>
                <th>OR_number</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Mode of Payment</th>
                <th>Payment Type</th>
                <th>Status</th>
                <th>Date of Payment</th>
            </tr>
                                        </thead>
                                        <tbody>
                                        <?php do{ ?>
             <tr>
                <td><?php echo $row['student_num']; ?></td>
                <td><?php echo $row['OR_number']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['yearlevel']; ?></td>
                <td><?php echo $row['semester']; ?></td>
                <td><?php echo $row['payment_type']; ?></td>
                <td><?php echo $row['payment_desc']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
                                            <?php }while($row = $res->fetch_assoc())  ?>
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