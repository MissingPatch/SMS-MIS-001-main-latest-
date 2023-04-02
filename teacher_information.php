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
include("add_teacher_modal.php");
include ("add_teacher.php");

$con = connection();
$sql = "SELECT * FROM hr_employee ORDER BY id DESC";
$teacher = $con->query($sql) or die($con->error);
$row = $teacher->fetch_assoc();
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
                    Teacher Information</p>

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
                            <b>Teacher Information </b>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                
                                        <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Name</th> 
                                        <th>Department</th>       
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ 
                                        if (!empty($row)){ ?>
                                        <tr>
                                        <td><?php echo $row['id'];?> </td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['f_name'];?> <?php echo $row['l_name'];?> </td>                      
                                        <td><?php echo $row['department'];?> </td>
                                        <td><?php echo $row['designation'];?> </td>                       
                                        <td><?php echo $row['status'];?> </td>
                                        <td>
                                            
                                        <form action="deleteacc_teacher.php"  method="POST" >
                                        <a href="teacher_profile.php?id=<?php echo $row["id"];?>" 
                                        class="btn btn-success btn-sm" style="background-color:#07177a;"><i class="bx bxs-show"></i> <b>View</b></a>
                                        <button type="submit" class="btn btn-danger btn-sm" name="delete" style="border: none; background: none; color: red; font-size: 20px;"><i class="bx bx-trash"></i>&nbsp;</button>
                                        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                                        </form>

                                    </td>
                                    </tr>
                                    <?php }
                                     }while($row = $teacher->fetch_assoc()); 
                                    ?>
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
<?php
include ("script/script.php");
?>