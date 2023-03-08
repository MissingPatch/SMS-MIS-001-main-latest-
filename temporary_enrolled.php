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
                    Temporary Enrolled</p>
                    
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a  ');
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>Temporary Enrolled </b></h5>
                    <p> </p>
                            <div class="container-fluid">
                    <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                    <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->
                           
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addaccount" 
                            style="background-color:#07177a; color:white; float:right;">
                            Add Account</button>          
                            </h6>
                            </div>
                            
                         
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>                                             
                                <tr>

                                    <th>Student Id</th>
                                    <th>Fullname</th>
                                    <th>Course</th>
                                    <th>Submitted On</th>
                                    <th>Application Status</th>
                                    
                                    <th>Action</th>
                                </tr>

                            </thead>  

                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM b4_student_application WHERE status='Temporary Enrolled'";
                                   $stud = $con->query($sql) or die($con->error);
                                   $row = $emp->fetch_assoc();
                                ?>

                                <?php do{
                                    if (!empty($row)) { ?> 
                                    <tr>
                                    <td>  <?php echo $row['id'];?>  </td>
                                    <td>  <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></td>
                                    <td> <?php echo $row['course'];?> </td>
                                    <td> <?php echo $row['added_at'];?> </td>
                                    <td> <?php echo $row['status'];?> </td>
                                    <td> 
                                    <form action=" "  method="POST" >
                                    <a href="#" 
                                    class="btn btn-success" style="background-color:#07177a;">
                                    View</a>
                                    </form>
                                    </td>
                                    </tr>
                                    <?php }
                                    } while($row = $stud->fetch_assoc()); ?>

                                </tbody>
                              

                    </div>
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
                    
                    
                   
                   
                    
                   
<?php
include ("script/script.php");
include ("footer.php");
?>
