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
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();

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
            
                                    
                           
                            <style>
                            bx:hover{
                                background-color: red;
                                color: blue;
                            }
                            </style>
                            <span style="float:right;">
                            <button type="button" style="color: #07179a; font-size: 19px; border: none;" data-toggle="modal" data-target="#addaccount" class="btn btn-sm"
                           ><i class="bx bxs-add-to-queue"> <b>Add Users</b></i>
                            </button>&nbsp;
                            
                            
                                                
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
                           
                            <?php 
                                do {
                                    $status_class = $row['is_logged_in'] == 1 ? 'online' : 'offline';
                                ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>                
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                        <td><?php
                                        if ($status_class == 'online') {
                                            echo "<p  style='font-size: 12px; margin-right: 15%; margin-left: 15%; color: white; background: lightgreen; text-align: center; border-radius: 12px;'>Online</p>";
                                        } else {
                                            echo "<p  style='font-size: 12px; margin-right: 15%; margin-left: 15%; color: white; background: red; text-align: center; border-radius: 12px;'>Offline</p>";
                                        }
                                        ?></td>
                                        <td>
                                        <div class="btn-group" role="group">
                                        <a href="empprofile.php?ID=<?php echo $row["ID"];?>" class="btn btn-success btn-sm" style="height: 30px;background-color:#07177a;"> <b>View</b></a>
                                        <form action="deleteaccdep.php" method="POST">                
                                        <button type="submit" style="border: none; background: none; color: red; font-size: 20px;" class="btn btn-danger btn-sm" name="delete"><i class="bx bx-trash"></i>&nbsp;</button>
                                        <input type="hidden" name="ID" value="<?php echo $row["ID"];?>">
                                        </form>
                                        </div>
                                        </td>
                                    </tr>
                                <?php } while ($row = $result->fetch_assoc());?>
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
