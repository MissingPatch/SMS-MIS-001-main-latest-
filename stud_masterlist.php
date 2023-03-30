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
                    Student Master List </p>

                

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
                    <b> Student List by Course </b><a href="stud_all_masterlist.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View Master List </a></h5>
                    
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
                            <b> BS Information Technology </b>
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
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Academic Year</th>
                    <th>Class Type</th>
                    <th>Student</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> BSIT </td>
                    <td> 1st Year </td>
                    <td> 1101-1128 </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_1st.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> BSIT </td>
                    <td> 2nd Year </td>
                    <td> 1201-1228 </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_2nd.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> BSIT </td>
                    <td> 3rd Year </td>
                    <td> 3101-3108 </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_3rd.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td> BSIT </td>
                    <td> 4th Year </td>
                    <td> 3101-3108 </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_4th.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>     
                                    </tbody></table>                       
                                    </div>
                                    </div>             
                                    </div>
                                    </div>
                                    </div>
                              

                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b> BS Office Administration </b>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                    <table class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                    <th>No.</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Academic Year</th>
                    <th>Class Type</th>
                    <th>Student</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> BSOA </td>
                    <td> 1st Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> BSOA </td>
                    <td> 2nd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> BSOA </td>
                    <td> 3rd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>  
                <tr>
                    <th scope="row">3</th>
                    <td> BSOA </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>     
                                    </tbody>
                                </table>                       
                                    </div>
                                    </div>             
                                    </div>
                                    </div>
                                    </div>

                                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b> BS Business Administrator </b>
                            </div>

                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                    <table class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                    <th>No.</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Academic Year</th>
                    <th>Class Type</th>
                    <th>Student</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> BSBA </td>
                    <td> 1st Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> BSBA </td>
                    <td> 2nd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> BSBA </td>
                    <td> 3rd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>  
                <tr>
                    <th scope="row">3</th>
                    <td> BSBA </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>     
                                    </tbody>
                                </table>                       
                                    </div>
                                    </div>             
                                    </div>
                                    </div>
                                    </div>

                                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b> BS Education </b>
                            </div>
                                
                                
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="table-responsive">
                    <table class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                    <th>No.</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Academic Year</th>
                    <th>Class Type</th>
                    <th>Student</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> BSEDUC </td>
                    <td> 1st Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> BSEDUC </td>
                    <td> 2nd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> BSEDUC </td>
                    <td> 3rd Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>  
                <tr>
                    <th scope="row">3</th>
                    <td> BSEDUC </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td>  </td>
                    <td><a href="#" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>     
                                    </tbody>
                                </table>                       
                                    </div>
                                    </div>             
                                    </div>
                                    </div>
                                    </div>

                                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b> BS Criminology </b>
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
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Section</th>
                    <th>Academic Year</th>
                    <th>Class Type</th>
                    <th>Student</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> BSCRIM </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_is.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td> BSCRIM </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_im.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td> BSCRIM </td>
                    <td> 4th Year </td>
                    <td>  </td>
                    <td> 2022-2023 </td>
                    <td> Regular / Irregular </td>
                    <td> <?php  ?>  </td>
                    <td><a href="stud_bsit_na.php" class="btn btn-success btn-sm"  style="background-color:#07177a;"> View </a></td>
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
