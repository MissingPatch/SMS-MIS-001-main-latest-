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

include ("accesslevelsuperadmin.php");
include ("include/header.php");
include ("include/sidebar.php");
include ("add_event_modal.php");
include ("delete_event.php");

             
$sql = "SELECT * FROM mis_stud_info";
$enr = $con->query($sql) or die($con->error);
$row = $enr->fetch_assoc();
           
if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
   
}

$sql1 = "SELECT * FROM mis_usermanagement";
if ($result1 = mysqli_query($con, $sql1)) {
  
    // number of employee
    $enr = mysqli_num_rows( $result1);
    
}

 
?>
        <div class="container-fluid">
        <div class="main-body"> 
        <!-- Content Row -->
        <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">


                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      
                      <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-1">
                    <p class="p mb-0 text-primary " style=" font-size: 20px; margin-top: 25px;">Dashboard</p>
                    <p class="p mb-0 " style=" font-size: 20px; margin-top: 25px;">
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


                    <!-- Enrolled Student -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                        <a href="index_enrolled_student.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Enrolled Student</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <?php 

                    @$id = $_GET['ID'];
                    $sql1 = "SELECT * FROM mis_teacher_account";
                    $tea = $con->query($sql1) or die($con->error);
                    $row = $tea->fetch_assoc();

                    if ($result2 = mysqli_query($con, $sql1)) {

                    $rowcount = mysqli_num_rows( $result2);

                    }

                    ?>

                    <!-- Teachers -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="teacher_information.php" style="text-decoration:none; color:black;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" >
                                            Teachers</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300" href="teacher_information.php"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>

                    <?php 

                    @$id = $_GET['OR_number'];
                    $sql1 = "SELECT * FROM pms_payment ORDER BY OR_number DESC";
                    $tea = $con->query($sql1) or die($con->error);
                    $row = $tea->fetch_assoc();

                    if ($result2 = mysqli_query($con, $sql1)) {

                    // number of students
                    $rowcount = mysqli_num_rows( $result2);

                    }

                    ?>

                    <!-- Teachers -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="stud_all_paid_anal.php" style="text-decoration:none; color:black;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" >
                                            Paid Students</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-credit-card-alt fa-2x text-gray-300" href="teacher_information.php"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>


<?php 

@$id = $_GET['OR_number'];
$sql1 = "SELECT * FROM pms_payment";
$tea = $con->query($sql1) or die($con->error);
$row = $tea->fetch_assoc();

if ($result2 = mysqli_query($con, $sql1)) {

// number of students
$rowcount = mysqli_num_rows( $result2);

}

?>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                        <a href="index_payment_method.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Payment</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-credit-card-alt fa-2x text-gray-300" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>


                        <?php 

                        @$id = $_GET['ID'];
                        $sql2 = "SELECT * FROM mis_categorize_inq WHERE status='1' ORDER BY inq_num DESC";
                        $cat = $con->query($sql2) or die($con->error);
                        $row = $cat->fetch_assoc();

                        if ($result3 = mysqli_query($con, $sql2)) {

                        // number of students
                        $rowcount = mysqli_num_rows( $result3);

                        }

                        ?>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                            <a href="dep_inquiries.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Inquiries</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-commenting fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>


                        <?php 

                        @$id = $_GET['ID'];
                        $sql2 = "SELECT * FROM mis_man_inc_rep";
                        $pms = $con->query($sql2) or die($con->error);
                        $row = $pms->fetch_assoc();

                        if ($result3 = mysqli_query($con, $sql2)) {

                        // number of students
                        $rowcount = mysqli_num_rows( $result3);

                        }

                        ?>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                            <a href="dep_reports.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Report </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-flag fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

                        <?php 

                        @$id = $_GET['id'];
                        $sql2 = "SELECT * FROM mis_concern WHERE qA='1' ORDER BY id";
                        $pms = $con->query($sql2) or die($con->error);
                        $row = $pms->fetch_assoc();

                        if ($result3 = mysqli_query($con, $sql2)) {

                        // number of students
                        $rowcount = mysqli_num_rows( $result3);

                        }

                        ?>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                            <a href="concernfetch.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Concerns Questions </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

                        <?php 

                        @$id = $_GET['Student_ID'];
                        $sql2 = "SELECT * FROM mis_stud_account";
                        $pms = $con->query($sql2) or die($con->error);
                        $row = $pms->fetch_assoc();

                        if ($result3 = mysqli_query($con, $sql2)) {

                        // number of students
                        $rowcount = mysqli_num_rows( $result3);

                        }

                        ?>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                            <a href="student_account.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Student Account </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>


  <!-- Calendar-->
 
    
  <link rel="stylesheet" href="css/calendar.css" />
    
    <div class="row">
    <div class="form-group col-md-6 ">
    <div class="card shadow mb-1">                                    
  
					<div class="content w-10">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
                        <div class="table-responsive">
				        <table class="table table-hover" style="width:100%;"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
                        <table class="dates-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
                          </tbody>
				        </table> 
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
                        </div> 

            <button type="button" class="btn btn-success btn-sm" style="float: right; background-color:#07179a;" data-toggle="modal" data-target="#addannounce">Add Event</button>
			</div>
			</div>
			</div>
            </div>
            </div>        
 
              <div class="form-group col-md-6">
              <div class="card shadow mb-3">                                                         
              <!-- Announcement -->
              <div class="card border-left-primary  " style="background-color:white;" >
               <div class="card-body" style="background-color:white;">
                <div class="row no-gutters align-items-center">
              <p style="text-align: center; font-size: 20px;"><b> Announcement </b></p>
              <hr>                           
              <div class="table-responsive">
              <table id="example" class="table table-striped" style="width:100%">
              <thead > 
              <tr>
              <th></th>
              <th>Announcement</th>
              <th>Date Start</th>
              <th>Date End</th>
              <th>Action</th>
              </tr>

              </thead>    
              <tbody>
			  <?php
              $sql = "SELECT * FROM mis_announcement ORDER BY id DESC";
              $event = $con->query($sql) or die($con->error);
              $row = $event->fetch_assoc();
              ?>

              <?php do{
              if (!empty($row)) { ?> 
             
			  <tr>		
				<td><i class="fa-sharp fa-solid fa-bullhorn"></i></td>
				<td style="font-size: 12px; word-wrap: break-word; max-width: 300px; "><strong><b><marquee><?php echo $row['title'];?></marquee></b><br><?php echo $row['descript'];?></strong></td>
				<td><strong><span style="background-color: #e6e6e6; font-size: 13px;"><i class="fa-solid fa-clock"></i>&nbsp;<?php echo $row['start_datetime'];?></span></strong></td>
                <td><strong><span style="background-color: #e6e6e6; font-size: 13px;"><i class="fa-solid fa-clock"></i>&nbsp;<?php echo $row['end_datetime'];?></span></strong></td>
                <td>
                
                <form action="delete_event.php"  method="POST">

                <a href="#" data-toggle="modal" data-target="#exampleModalCenter5<?php echo $row['id']; ?>" style="text-decoration: none; font-size: 20px;">
                <i class="bx bx-edit"></i>&nbsp;</a>

                <button style="border: none; background: none; color: red; font-size: 20px;" type="submit" name="delete"><i class="bx bx-trash"></i>&nbsp;</button>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                </form>


                <!-- Modal For Announcement -->
                <div class="modal fade" id="exampleModalCenter5<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Update Announcement</h5>
                    </div>
                    <div class="modal-body">
                                    <div class="card-body">
                                        <div class="container-fluid">
                                       
                                            <form action="edit_event.php" method="post">
                                                <div class="form-group mb-2">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <label for="title" class="control-label">Subject</label>
                                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title"
                                                    value="<?php echo $row['title'];?>" >
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="descript" class="control-label">Announcement</label>
                                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="descript" id="descript" 
                                                    value=""><?php echo $row['descript'];?></textarea>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="start_datetime" class="control-label">Start</label>
                                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime"
                                                    value="<?php echo $row['start_datetime'];?>">
                                                    
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="end_datetime" class="control-label">End</label>
                                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" 
                                                    value="<?php echo $row['end_datetime'];?>">
                                                </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update</button>
                        </form>
                    </div>
                    
                    </div>
                </div>
                </div>
                <!--end of modal -->
   
                </td>
				</tr>
                

              <?php }
              } while($row = $event->fetch_assoc()); ?>
                                          
              </tbody>
              </table>                                             
              </div>
			  </div>
              </div>
              </div>
              </div>
                    </div>
                    </div>
                        <!-- Calendar -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/main.js"></script>     
                    </div>
                    </div>
                    <?php
                    include ("footer.php");
                    ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

                        
<?php
include ("script/script.php");
?>
