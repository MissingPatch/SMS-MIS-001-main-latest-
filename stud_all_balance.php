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
include("student_update_modal.php");
include("student_update.php");
include("deleteaccdep.php");
$con = connection();
@$id = $_GET['student_id'];
$sql = "SELECT * FROM pms_payment ORDER BY student_id";
$stud = $con->query($sql) or die($con->error);
$row = $stud->fetch_assoc();

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

                    <fieldset>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary " style="color:#07177a;">Data Capturing
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Total Balance</p>
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
                    
                    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script  src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
                    <script>
                        
                    $(document).ready(function() {
                     $('#example').DataTable( {
                     dom: 'Bfrtip',
        
                     buttons: [
                     'copy', 'csv', 'excel', 'pdf', 'print'
                   ]
                      } );
                     } );

                   </script>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                           <b> Total Balance </b>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                            <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                
                                        <tr>
                                        <th>OR No.</th>   
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Course</th>
                                        <th>Section</th>
                                        <th>Year Level</th>
                                        <th>Payment Type</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ 
                                      if (!empty($row)){?>
                                        <tr>
                                        <td><?php echo $row['OR_number'];?></td>
                                        <td><?php echo $row['student_id'];?></td>
                                        <td><?php echo $row['Last_Name'];?>&nbsp;<?php echo $row['First_Name'];?></td>
                                        <td><?php echo $row['Course'];?></td>
                                        <td><?php echo $row['section'];?></td> 
                                        <td><?php echo $row['year_level'];?></td>
                                        <td><?php echo $row['particular'];?></td> 
                                        <td><?php echo $row['balance'];?></td>                                          
                                        
                                        <td>
                                            
                                        <form action=" "  method="POST" >
                                        <a href="studprofile.php?student_id=<?php echo $row["student_id"];?>" 
                                        class="btn btn-success btn-sm" style="background-color:#07177a;">
                                        View
                                        </form>

                                    </td>
                                    </tr>
                                    <?php }}while($row = $stud->fetch_assoc()); ?>
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
?>