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
include("concern_modal.php");
include("deleteaccdep.php");

$con = connection();
$sql = "SELECT * FROM mis_payment_method ORDER BY OR_number ASC";
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
                    <p class="p mb-0 text-primary " style="color:#07177a;">Performance Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Payment History</p>
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
                            <a href="stud_payment_anal.php" class="btn btn-success btn-sm" style="background-color:#07179a;">    
                            <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp; Payment History </b>           
                            </h6>
                            </div>
                          
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                    <th>OR No.</th>   
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Mode of Payment</th>
                                        <th>Date</th>
                                        <th>Balance</th>
                                        <th>Payment Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>                       
                                        <td><?php echo $row['student_num'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['payment_type'];?></td>
                                         <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['bal'];?></td>
                                        <td><?php echo $row['payment_desc'];?></td>
                                        <td><?php echo $row['amount'];?></td>
                                        <td><?php echo $row['status'];?></td> 
                                        
                                       
                                        <div class="col-sm-12" >
                    

                                        <input type="hidden" name="" > 
                                        </div>
                                        <td>
                                           <!-- receipt modal-->
                                    <!-- Modal edit -->
                                        <div class="modal fade" id="receiptModal<?php echo $row['OR_number']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
     
                                            </div>
                                        
                                            <form action="stud_pms_update.php" method="POST">
                                            <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Student ID: </label>
                                                    <input type="text" id="student_num" name="student_num" class="form-control" placeholder="" aria-label="" value="<?php echo $row["student_num"];?>" disabled>
                                                </div>


                                                <div class="col-md-6">
                                                    <label class="form-label">OR Number: </label>
                                                    <input type="text" id="OR_number" name="OR_number" class="form-control" placeholder="" aria-label="" value="<?php echo $row["OR_number"];?>" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Total Balance: </label>
                                                    <input type="text" id="bal" name="bal" class="form-control" placeholder="" aria-label="" value="<?php echo $row["bal"];?>" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Mode of Payment: </label>
                                                    <input type="text" id="payment_type" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Payment Type: </label>
                                                    <input type="text" id="payment_desc" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label"> Date: </label>
                                                    <input type="text" id="date" name="date" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["date"];?>" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label"> Semester: </label>
                                                    <input type="text" id="semester" name="semester" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["semester"];?>" >
                                                </div>
                                                
                                                </div>
                                                
                                                <br>
                                            <br>
                                    
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" onclick="printModalContent('receiptModal<?php echo $row['OR_number']; ?>')">Print</button>
                                            <button type="submit" name="update"  class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                
                                        <!--
                                        <form action=" "  method="POST" >
                                        <a href="stud_pms_profile.php?OR_number=
                                        class="btn btn-success btn-sm" style="background-color:#07177a;">
                                        View
                                        </form>
                                        -->
                                        <a href="#" data-toggle="modal" data-target="#receiptModal<?php echo $row['OR_number']; ?>"
                                        class="btn btn-primary" style="background-color: #07177a;">View</a>


                                        <script>
                                    function printModalContent(modalId) {
                                    // Get the modal element
                                    var modal = document.getElementById(modalId);

                                    // Create a new element to hold the printable content
                                    var printContent = document.createElement('div');

                                    // Copy the modal content into the print element, omitting the button
                                    var modalContent = modal.querySelector('.modal-body').cloneNode(true);
                                    modalContent.removeChild(modalContent.lastElementChild); // Remove the "Print Receipt" button
                                    printContent.appendChild(modalContent);

                                    // Create a new window to print the content
                                    var printWindow = window.open('', 'Print', 'height=1500,width=1600');

                                    // Append the printable content to the print window document
                                    printWindow.document.body.appendChild(printContent);

                                    // Print the window
                                    printWindow.print();

                                    // Close the print window
                                    printWindow.close();
                                    }

                                        </script>

                                         </td>
                                    

                                    </tr>

                                    
                                    <?php }while($row = $result->fetch_assoc()); ?>
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
                                                                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
?>