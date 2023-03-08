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
@$id = $_POST['stud_num'];
$sql = "SELECT * FROM mis_pms ORDER BY stud_num ASC";
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
                    Payment Management System</p>
                    
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a ');
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>Payment Management</h5>
                    <p> </p>
                    

                    


                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Student #</th>   
                                        <th>Firsname</th>
                                        <th>Lastname</th>
                                        <th>Payment Amount</th>
                                        <th>Balance</th>
                                        <th>Payment Type</th>
                                        <th>Payment Method</th>
                                        <th>OR Number</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                        <th>Action</th>
                                        
                                       
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['stud_num'];?></td>                       
                                        <td><?php echo $row['fname'];?></td>
                                        <td><?php echo $row['lname'];?></td>
                                        <td><?php echo $row['payment_amount'];?></td>
                                         <td><?php echo $row['balance'];?></td>
                                        <td><?php echo $row['payment_type'];?></td>
                                        <td><?php echo $row['payment_method'];?></td>
                                        <td><?php echo $row['invoice_num'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                         <td><?php echo $row['date'];?></td>  
                                        
                                       
                                        <div class="col-sm-12" >
                    

                                        <input type="hidden" name="" > 
                                        </div>
                                        <td>
                                           
                                            <form action=" "  method="POST" >
                                            <a type="submit" name="submit" 
                                            class="btn btn-success btn-sm"  style="background-color:#07177a;" data-toggle="modal" 
                                            data-target="#">View</a>

                                            <input type="hidden" name="" > 
                                           
                                           
                                            
                                            </form>
                                            
                                           
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
                                               
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>                                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>