
<?php 

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userlogin'])){
    $_SESSION['userlogin'];
}
else{
    echo header("location:login.php");
}
include('includes/header.php');
include('includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();
?>    
<style>
.sort-icon {
  display: flex;
  align-items: center;
}

.sort-icon i {
  margin-left: 5px;
}
th, td {
  border: 0;
}
table tr:nth-child(even) {
   background-color: #ADD8E6;
}

table tr:nth-child(odd) {
   background-color: #fff;
}
</style>

        <!-- Begin Page Content -->
            <div class="container-fluid">
            <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <p class="p mb-0 text-primary" style="margin-left:15px;"><a href="admin_dashboard.php">Dashboard</a>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                Student Records
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                Request For Transferee
                                            </p>
                                            <p class="date-time mb-0">
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

<style>
    .date-time {
        font-size: 20px;
        margin-top: 25px;
        text-align: right;
        flex: 1;
    }
</style>
                        <!-- DataTables Example -->
                        
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col text-center">
                                <h3 class="m-0 font-weight-bold text-primary">Student Application</h3>

                            </div>
                        </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                            <thead>

                                                
                                                <tr>
                        
                                                    <th>Tracking ID</th>
                                                    <th>Full Name</th>
                                                    <th>Previous School</th>
                                                    <th>Previous Course</th>
                                                    <th>Previous Year Level</th>
                                                    <th>Submitted On</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                    
                                                
                                                </tr>

                                            </thead>    
                                                <tbody>
                                                    <?php
                                                        $sql = "SELECT * FROM oes_transferee";
                                                        $college = $conn->query($sql) or die($conn->error);
                                                        $row = $college->fetch_assoc();
                                                    ?>

                                               <?php do{
                                                    if (!empty($row)) { ?> 
                                                    <tr>
                                                    <td> <?php echo $row['track_id'];?>  </td>
                                                    <td> <?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                                                    <td> <?php echo $row['last_school_att'];?> </td>
                                                    <td> <?php echo $row['prev_course'];?></td>
                                                    <td> <?php echo $row['year_lvl'];?></td>
                                                    <td> <?php echo $row['submitted_on'];?> </td>
                                                    <td>
                                                                <strong>
                                                                    <?php if ($row['status'] == 'Pending') { ?>
                                                                    <i class="fa fa-times-circle text-danger">Pending</i>
                                                                    <?php } else if ($row['status'] == 'Approved') { ?>
                                                                    <i class="fa fa-check-circle text-success">Approved</i>
                                                                    <?php } else if ($row['status'] == 'Enrolled') { ?>
                                                                    <i class="fa fa-check-circle text-success">Enrolled</i>
                                                                    <?php } ?>
                                                                    <span class="status-text"> <?php $row['status'];?> </span>
                                                                </strong>
                                                        </td>
                                                    
                                                   
                                                    </tr>
                                                    <?php }
                                                    } while($row = $college->fetch_assoc()); ?>
                                                
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    <!-- End of DataTables -->
            </div>
        <!-- End of Page Content -->

    </section>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
