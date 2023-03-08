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
include("student_update.php");



$con = connection();
@$ID = $_GET['stud_id'];
$sql = "SELECT * FROM mis_grades ORDER BY stud_id";
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
                    <p class="p mb-0 text-primary" style="margin-left:15px;">Data Capturing
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Student Grades</p>

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
                   
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>Student Grades </b></h5>
                    
                    <p> </p>
                    
                    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script  src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
                    <script  src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>


                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b>List of Student Grades </b>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                
                                        <tr>
                                        <th>Student ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>           
                                        <th>Last Name</th>
                                        <th>Course</th>
                                        <th>Section</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['stud_id'];?> </td>
                                        <td><?php echo $row['fname'];?> </td>
                                        <td> <?php echo $row['mname'];?></td>                        
                                        <td><?php echo $row['lname'];?> </td>
                                        <td><?php echo $row['course'];?> </td>
                                        <td> <?php echo $row['section'];?></td>    
                                        <td> <?php echo $row['year'];?></td>                       
                                        <td>
                                            
                                        <form action=" "  method="POST" >
                                        <a href="stud_grades_profile.php?stud_id=<?php echo $row["stud_id"];?>" 
                                        class="btn btn-success" style="background-color:#07177a;">
                                        View
                                        </form>

                                    </td>
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