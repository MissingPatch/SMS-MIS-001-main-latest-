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
include ("include/header.php");
include ("include/sidebar.php");


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
                    <p class="p mb-0 text-primary " style="color:#07177a;">Management Inquries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Concerns</p>
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
                              <b>List of Concerns</b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts --> 

    </div>


<?php

include_once("connection/connection.php");

$con = connection();
@$id = $_GET['id'];
$sql = "SELECT * FROM mis_concern WHERE qA='1' ORDER BY id ASC";
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
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                        <?php $i=1; do{ ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>  
                                                <td><?php echo $row['queries']; ?></td>
                                                <td><?php echo $row['replies']; ?></td>
                                                <td>
                                                <form action="delete_event.php"  method="POST">

                <a href="#" <?php echo $row['id']; ?>" style="text-decoration: none; font-size: 20px;">
                <i class="bx bx-edit"></i>&nbsp;</a>

                <button style="border: none; background: none; color: red; font-size: 20px;" type="submit" name="delete"><i class="bx bx-trash"></i>&nbsp;</button>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                </form>
                                                   
                                                </td>
                                            </tr>
                                            <?php }while($row = $res->fetch_assoc())  ?>
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
?>