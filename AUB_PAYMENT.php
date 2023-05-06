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

$con = connection();
@$id = $_POST['trans_code'];
$sql = "SELECT * FROM mis_aub_payments ORDER BY trans_code DESC";
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();



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
                    <p class="p mb-0 text-primary " style="color:#07177a;">Data Capturing
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Online Payment</p>
                    
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a ');
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
<?php
include ("import_modal.php");
?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <b>Online Payment Record</b>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter7"  class="btn btn-success btn-sm" style="color: black; background: none; float: right;"><i class="bx bx-import"></i>&nbsp; Upload Data
                            </a> 
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>No.</th>   
                                        <th>Transaction Code</th>
                                        <th>Student Name</th>
                                        <th>Student ID</th>
                                        <th>Particulars</th>
                                        <th>Amount</th>
                                        <th>Mode Of Payment</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do {
                                    if (!empty($row)){?>
                                        <tr>
                                        <td><?php echo $row['no'];?></td>
                                        <td><?php echo $row['trans_code'];?></td>
                                        <td><?php echo $row['studname'];?></td>
                                        <td><?php echo $row['studid'];?></td> 
                                        <td><?php echo $row['particulars'];?></td>
                                        <td><?php echo $row['amount'];?></td> 
                                        <td><?php echo $row['modeofpay'];?></td>
                                        
                                       
                                        <div class="col-sm-12" >
                    

                                        <input type="hidden" name="" > 
                                        </div>
                                        <td>

                                          <!-- Button to show modal -->
                                          <button type="button" style="color: white; background: #07177a;" class="btn btn-sm" data-toggle="modal" data-target="#paymentModal<?php echo $row['trans_code']; ?>">
                                            <i class="bx bx-show"></i> <b>View</b>
                                          </button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="paymentModal<?php echo $row['trans_code']; ?>" tabindex="-1" role="dialog" aria-labelledby="paymentModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="paymentModalTitle"><b>Payment Details</b></h5>
                                                </div>

                                    <img src="./images/logo.png" style="width: 150px; height: 190px; margin-left: 65%; margin-top: 35%; z-index: 1; position: absolute;">

                                    <p style="width: 190px; height: 200px; margin-left: 59%; margin-top: 15%; z-index: 1; position: absolute;"><b>BESTLINK COLLEGE OF &nbsp;&nbsp;&nbsp;&nbsp;THE PHILIPPINES</b></p>

                                                <div class="modal-body">
                                                  <p><b>No.: </b><?php echo $row['trans_code']; ?></p>
                                                  <p><b>Deposit Date: </b><?php echo $row['depositdate']; ?></p>
                                                  <p><b>Transaction Code: </b><?php echo $row['trans_code'];?></p>
                                                  <p><b>Student Name: </b><?php echo $row['studname']; ?></p>
                                                  <p><b>Student ID: </b><?php echo $row['studid']; ?></p>
                                                  <p><b>Particulars: </b><?php echo $row['particulars']; ?></p>
                                                  <p><b>Amount: </b><?php echo $row['amount']; ?></p>
                                                  <p><b>Mode of Payment: </b><?php echo $row['modeofpay']; ?></p>
                                                  <p><b>Branch: </b><?php echo $row['branch']; ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                    

                                    </tr>
                                    <?php }}while($row = $result->fetch_assoc()); ?>
                                    </tbody>
                                    </table>
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
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>                                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
