
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
         
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
                                                Student Application
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

                        
            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col text-center">
                                <h3 class="m-0 font-weight-bold text-primary">Student Application</h3>
                                <form method="post" action="pdf.php" target="_blank">
                                    <button type="submit" class="btn btn-danger" onclick="this.form.target='_blank';">
                                        <i class="fas fa-file-pdf"></i> Download PDF
                                    </button>
                                </form>
                            </div>
                        </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="example" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th style="padding-top: 20px; padding-bottom: 20px;">Student ID</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Image</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Full Name</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Course</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Year Level</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Student Type</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Submitted On</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Application Status</th>
            <th style="padding-top: 20px; padding-bottom: 20px;">Action</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
     
        $sql = "SELECT * FROM oes_student_application WHERE status='pending'";
        $college = $conn->query($sql) or die($conn->error);
        $row = $college->fetch_assoc();
                                                                    
        ?>

    <?php do{
        if (!empty($row)) { ?> 
        <tr>
            <td><strong><?php echo $row['id'];?>  </td>
            <td><img src="./uploads/<?php echo $row['enrollment_img']; ?>" alt="Enrollment Image" width="70" height="70"></td>
            <td><strong>  <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></td>
            <td><strong>  <?php echo $row['course'];?> </td>
            <td><strong>  <?php echo $row['year_level'];?> </td>
            <td><strong>  <?php echo $row['student_type'];?> </td>
            <td><strong>  <?php echo $row['added_at'];?> </td>
     
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
            <td><a href="ad_view_application.php?ID=<?php echo $row['id'];?>"  class="btn btn-success" style="background-color:#07177a;"><i class="bi bi-eye"></i></a></td>
        
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
