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

include_once("mobile_conn.php");
include ("connection/connection.php");
include ("include/staffheader.php");
include ("include/staffsidebar.php");


include "mobileadmin/read.php";
include "mobileadmin/update.php";
include "concern_modal.php";
include "concern_update_modal.php";



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
                    <p class="p mb-0 text-primary" style="margin-left:15px; margin-top: 25px;">Management Inquiries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Concerns </p>
                    <p class="p mb-0 " style=" font-size: 20px; margin-top: 25px;">
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        echo "". date('F j, Y g:i:a  ');
                    ?>
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

                            <div class="card-header py-3"><b>List of Concern</b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts --> 

    </div>

                              
							

        <div class="card-body">
        <div class="table-responsive">

        <?php

include_once("connection/connection.php");

$con = connection();
@$id = $_GET['id'];
$sql = "SELECT * FROM mis_concern WHERE qA='1' ORDER BY fetch_concern DESC";
$res = $con->query($sql) or die($con->error);
$row = $res->fetch_assoc();

?>

        <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="table table-hover" style="width:100%">
                    <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Command</th>
                                                <th>Questions</th> 
                                                <th>Fetch Count</th>          
                                            </tr>
                                            </thead>
                                        <tbody>
                                        <?php $i=1; do{ ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>  
                                                <td><?php echo $row['queries']; ?></td>
                                                <td><?php echo $row['replies']; ?></td>
                                                <td><?php echo $row['fetch_concern']; ?></td>
                                            </tr>
                                            <?php }while($row = $res->fetch_assoc())  ?>
                    </tbody>
                    </table>                             
                                               
                                    </div>
                                    </div>    
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                                    include ("script/script.php");
                                    include ("footer.php");
                                    ?>
                                    </div>
                               
                                    </div>
                                  
                                    </div>
                                    </div>


