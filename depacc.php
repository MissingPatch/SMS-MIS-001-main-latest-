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
include("deleteacc_stud.php");

$id=$_SESSION['ID'];
$email=$_SESSION['email'];
$sql = "SELECT * FROM mis_usermanagement ORDER BY ID DESC";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();

?>
                <div class="container-fluid">
                <div class="main-body">
                    <!-- Begin Page Content -->
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
                    <p class="p mb-0 text-primary" style="margin-left:15px;">User Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department Account</p>
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
      
                    <style type="text/css">
                        .icon {
                            color: #07177a;
                        }
                    </style>
                            <div class="container-fluid">
                    <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                    <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->
                       
                           <b>Department Account </b>
                           <style>
                            .fa-user-plus {
                                color: blue;
                            }

                            .status-circle {
                                width: 10px;
                                height: 10px;
                                border-radius: 50%;
                                display: inline-block;
                                margin-right: 5px;
                                margin-bottom: 5px;
                            }

                            .online {
                                background-color: green;
                            }

                            .offline {
                                background-color: red;
                            }
                            </style>
            
                                    
                            <?php

                                if ($row['is_logged_in']) {
                                $status_class = 'online'; // Set class to 'online' if user is logged in
                                } else {
                                $status_class = 'offline'; // Set class to 'offline' if user is not logged in
                                }
                            ?>

                            <span style="float:right;">
                            <button type="button" class="fa-solid fa-user-plus" aria-placeholder="add" style="height:30px; width:40px; margin-right:10px;" data-toggle="modal" data-target="#addaccount" 
                            style="background-color:#07177a; color:white; ">
                            </button>          
                                                
                            </span>
                            </div> 
                            <div class="card-body">
                            <div class="table-responsive">
                            <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Name</th>                                
                                    <th>Department</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                            <?php do{ ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>                
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                        <td><?php echo $status_class; ?></td>
                                        <td>
                                        <div class="btn-group" role="group">
                                        <form action="deleteaccdep.php" method="POST">                
                                        <a href="empprofile.php?ID=<?php echo $row["ID"];?>" class="btn btn-success btn-sm" style="background-color:#07177a;">View</a>
                                        <a type="submit" class="btn btn-danger btn-sm" name="delete" >Del</a>
                                        <input type="hidden" name="ID" value="<?php echo $row["ID"];?>">
                                        </form>
                                        </div>
                                        </td>
                                    </tr>
                                <?php } while ($row = $emp->fetch_assoc())?>
                            </tbody>
                        </table> 
                    </div>
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
