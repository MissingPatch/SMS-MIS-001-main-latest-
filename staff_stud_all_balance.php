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
include ("include/staffheader.php");
include ("include/staffsidebar.php");
include("deleteaccdep.php");
$con = connection();
@$id = $_GET['stud_num'];
$sql = "SELECT * FROM mis_stud_info ORDER BY stud_num";
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
                    <p class="p mb-0 text-primary" style="margin-left:15px;">User Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Student Balance </p>
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    echo "". date('F j, Y g:i:a  ');
                    ?>
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
                                        <th>Student ID</th> 
                                        <th>Year Level</th>
                                        <th>Course</th>
                                        <th>Last Name</th> 
                                        <th>First Name</th> 
                                        <th>Total Balance</th>         
                                        <th>Academic Year</th>
                                        <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['stud_num'];?></td>
                                        <td><?php echo $row['ylvl'];?> </td>
                                        <td><?php echo $row['program_code'];?></td>
                                        <td><?php echo $row['lname'];?></td>
                                        <td><?php echo $row['fname'];?></td>
                                        <td><?php echo $row['bal'];?></td>
                                        <td>2022-<?php echo $row['year'];?> </td>
                                        <td><?php echo $row['student_status'];?></td>                                              

                                    </tr>
                                    <?php }while($row = $stud->fetch_assoc()); ?>
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
                                    
                    
                                    
                             <!-- /.container-fluid -->

</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>