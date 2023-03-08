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
$sql = "SELECT * FROM mis_type_req ORDER BY req_id ASC";
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
                    Type of Request</p>
                    
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a  ');
                    ?>
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
                    <b>Type of Request </h5>
                    <p> </p>
                    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Request_ID</th>
                                        <th>Request Type</th>
                                        <th>Description</th>
                                        <th>Response Format</th>
                                        <th>Department</th>
                                        <th>Date Added</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['req_id'];?></td>
                                        <td><?php echo $row['req_type'];?></td>
                                        <td><?php echo $row['Description'];?></td>                        
                                        <td><?php echo $row['response_format'];?></td>
                                        <td><?php echo $row['department'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td>
                                            <form action=" "  method="POST" >
                                            <a href="#" 
                                            class="btn btn-success" style="background-color:#07177a;">
                                            View
                                            </form>
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