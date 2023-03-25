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
include ("include/staffheader.php");
include ("include/staffsidebar.php");
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
                        <a href="staffstudinfo.php" style="text-decoration:none; color:black;">
                            <div class="card-body" >
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Enrolled Student</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                  


                        <?php 

                        @$id = $_GET['ID'];
                        $sql2 = "SELECT * FROM mis_categorize_inq  WHERE status='1' ORDER BY inq_num DESC";
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
                            <a href="staff_categorize_inq.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Inquiries</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
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
                            <a href="#" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Report </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

                        <?php 

                        @$id = $_GET['id'];
                        $sql2 = "SELECT * FROM mis_concern WHERE qA='1' ORDER BY id;";
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
                            <a href="staffconcern.php" style="text-decoration:none; color:black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Concerns Feedback </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                                            printf( $rowcount);?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
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
				        <table class="table table-hover" style="width:100%"> 
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
