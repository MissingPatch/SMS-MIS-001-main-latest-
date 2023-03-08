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
@$id = $_GET['student_num'];
$sql = "SELECT * FROM mis_payment_method ORDER BY student_num";
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
                    List of Paid Student </p>
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
<div class="card border-left-primary mb-4">
<div class="card-body">
<center>
<h5 _ngcontent-gwg-c228=""  class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
<p style="font-size: 20px;">&nbsp;
<svg xmlns="http://www.w3.org/2000/svg"   width="50px" height="30px" fill="currentColor"  viewBox="0 0 24 24">
<path d="M19 14V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zm-9-1c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm13-6v11c0 1.1-.9 2-2 2H4v-2h17V7h2z"/></svg>
 <b> Categorize Payment </b><br>
                    <p> </p></center>
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



                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b> Payment List </b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                    <table class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                    <th>No.</th>
                    <th>Payment Type</th>
                    <th>Courses</th>
                    <th>Year</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> Miscellaneous Fee</td>
                    <td> All Course </td>
                    <td> 1st to 4th Year </td>
                    <td><a href="stud_misc.php" class="btn btn-success btn-sm" style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td style="font-size: 15px;"> - Enrollment Fee &nbsp;&nbsp;<a href="stud_enrollment_fee.php" class="btn btn-success btn-sm"  style="font-size: 9px;"> View </a></td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>  
                <tr>
                    <th scope="row">2</th>
                    <td> Uniform </td>
                    <td> All Course </td>
                    <td> 1st to 4th Year </td>
                    <td><a href="stud_uniform.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> Books </td>
                    <td> All Course </td>
                    <td> 1st to 4th Year </td>
                    <td><a href="stud_books.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>  
                <tr>
                    <th scope="row">4</th>
                    <td> Documents (SOA, COG, and Evaluation) </td>
                    <td> All Course </td>
                    <td> 1st to 4th Year </td>
                    <td><a href="stud_documents.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>  
                <tr>
                    <th scope="row">5</th>
                    <td> Research </td>
                    <td> All Course </td>
                    <td> 4th Year </td>
                    <td><a href="stud_research.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr> 
                <tr>
                    <th scope="row">6</th>
                    <td> All Payment Record </td>
                    <td> All Course </td>
                    <td> 1st to 4th Year </td>
                    <td><a href="stud_all_pms.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr> 
                <tr>
                    <th scope="row">7</th>
                    <td> Other Fee's &nbsp;&nbsp;<a href="#" class="btn btn-success btn-sm"  style="font-size: 9px;"> View </a> </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                </tr>     
                                    </tbody></table>                       
                                    </div>
                                    </div>             
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    </h5>
                    <p> </p>

                                    </tbody></table>                       
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
