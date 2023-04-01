
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

if(isset($_POST['add'])){

$inq_type = $_POST['inq_type'];
$department = "Enrollment";
$status = "1";

$sql = "INSERT INTO `mis_categorize_inq` (`inq_type`, `department`,`status`)
VALUES ('$inq_type','$department','$status')";

    //Perform the query
    if(mysqli_query($conn, $sql)) {
        $_SESSION['success']="Data Inserted Successfully";
    }else{
        $_SESSION['error'] = "Data Failed to Insert";
    }
} 
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
                                                Student Records
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                Request Paid Student List
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
                                    <h3 class="m-0 font-weight-bold text-primary">Request</h3>
                                    <div class="">
                                        <button class="btn btn-primary shadow-sm border btnad" data-bs-toggle="modal" data-bs-target="#addnew"><i class="bi bi-plus-lg"></i> Add new</button>
                                    </div>
                            </div>
                        </div>
                                
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                                            <thead > 
                                                                <tr>
                                                                    <th>Inquiry No.</th>
                                                                    <th>Inquiry Type</th>
                                                                    <th>Department</th>
                                                                    <th>Date Request</th>
                                                                    <th>Request Status</th>
                                                                </tr>

                                                            </thead>    
                                                                <tbody>
                                                                    <?php
                                                                        $sql = "SELECT * FROM mis_categorize_inq WHERE department='enrollment'";
                                                                        $college = $conn->query($sql) or die($conn->error);
                                                                        $row = $college->fetch_assoc();
                                                                    ?>

                                                                    <?php do{
                                                                        if (!empty($row)) { ?> 
                                                                        <tr>
                                                                            <td><strong><?php echo $row['inq_num'];?>  </td>
                                                                            <td><strong>  <?php echo $row['inq_type'];?></td>
                                                                            <td><strong>  <?php echo $row['department'];?> </td>
                                                                            <td><strong>  <?php echo $row['date_req'];?> </td>
                                                                            <td >
                                                                                <strong>
                                                                                    <?php if ($row['status'] == '1') { ?>
                                                                                        <i class="fa fa-times-circle text-danger">Pending</i>
                                                                                    <?php } else if ($row['status'] == '2') { ?>
                                                                                        <i class="fa fa-check-circle text-success">Approved</i>
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

                    <!-- Start Modal -->
                    <div style="color: #012970;" class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Request to MIS</h1>
                                        <button type="button" class="btn close btn-light btn-sm shadow-sm border" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">
                                        <form class="form-horizontal row g-3 needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input style="color: #012970;" type="text" class="form-control" name="inq_type" required>
                                                        <label style="color: #012970;">Request</label>
                                                    </div>
                                                </div>

                                                    
                                                <div class="text-center mb-4">
                                                    <button style="color: #198754;" type="submit" class="btn btn-light shadow-sm border" name="add">Submit</button>
                                                    <button style="color: #012970;" type="button" class="btn btn-light shadow-sm border" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ENd Modal -->
            </div>
        <!-- End of Page Content -->

    </section>
</div>
<?php 
if(isset($_SESSION['success']) && $_SESSION['success']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['success']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "ad_mis_request.php";
});
  </script>
  <?php
  unset($_SESSION['success']);
}
?>

<?php 
if(isset($_SESSION['error']) && $_SESSION['error']!=''){
  ?>
  <script>
    swal({
      title:"<?php echo $_SESSION['error']?>",
      icon: "warning",
      button: "Ok",
    });
  </script>
  <?php
  unset($_SESSION['error']);
}
?>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
