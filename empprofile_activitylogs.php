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
include ("activity_log_backend.php");
include ("connection/connection.php");
$con = connection();
include ("include/header.php");
include ("include/sidebar.php");
include ("change_password.php");

if(isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $email=$_SESSION['email'];
  $sql = "SELECT * FROM mis_usermanagement WHERE ID='$id'";
  $result = $con->query($sql) or die($con->error);
  $row = $result->fetch_assoc();

  // Call the log_activity function after the employee's information is retrieved
  log_activity($_SESSION['ID'], $_SESSION['email'], "Viewed Activity of $email");
}

?>
<style>
.toggle-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 20px;
  margin-bottom: 20px;
}

.toggle-status {
  flex: 1;
  margin-right: 300px;
  text-align: right;
}

.toggle {
  display: inline-block;
  position: relative;
  width: 60px;
  height: 34px;
}

.toggle input[type="checkbox"] {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 34px;
  transition: background-color 0.2s ease;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  border-radius: 50%;
  transition: transform 0.2s ease;
}

input[type="checkbox"]:checked + .slider {
  background-color: #2196F3;
}

input[type="checkbox"]:checked + .slider:before {
  transform: translateX(26px);
}
</style>
  <!-- Main Content -->

        <div class="container-fluid">
        <div class="main-body">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="empprofile.php?ID=<?php echo $row["ID"];?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empprofile_activitylogs.php?ID=<?php echo $row["ID"];?>"><b style="color:#07177a; float:center; width:100px;">Activity Logs </b></a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Setting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="empprofile_security.php?ID=<?php echo $row["ID"];?>">Security Setting</a>
                       
                    </li>
                    </ul>
                </div>
                </nav>



                              <div class="card-body">
                              <div class="card">
                          
                                <div class="card-header">
                                  Activity Logs
                                 
                                </div>
                                <div class="card-body">
                                <!--<form method="GET" class="d-inline">
                                    <div class="input-group">
                                    <input type="date" name="filter_date" class="form-control" style="width: 50%;" required>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                  </form>
                                        -->
                                 
                                <div class="table-responsive">
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>

                                        <tr>
                                        <th>Employee ID</th>
                                        <th>Email</th>
                                        <th>Activity Type</th> 
                                        <th>IP Address</th>             
                                        <th>Activity Time</th>
                                       
                                        </tr>
                                    </thead>                                    
                                    <tbody>                               
                                    <?php 
                                          // Check if a filter date was submitted
                                          if (isset($_GET['filter_date'])) {
                                            $filter_date = $_GET['filter_date'];
                                            $sql = "SELECT * FROM `mis_activity_logs` WHERE ID='$id' AND DATE(`activity_time`) = '$filter_date'";
                                            $res = mysqli_query($con, $sql);
                                          } else {
                                            $sql = "SELECT * FROM `mis_activity_logs` WHERE ID='$id' ORDER BY `activity_time` DESC";

                                            $res = mysqli_query($con, $sql);
                                          }

                                          // Display activity logs
                                          while ($row = $res->fetch_assoc()) {
                                            $activity_type = $row['activity_type'];
                                            $activity_time = $row['activity_time'];
                                        ?>
                                        <tr>
                                        <td><?php echo @$row['ID'];?> </td>
                                        <td><?php echo @$row['email'];?> </td>
                                        <td> <?php echo @$row['activity_type'];?></td>    
                                        <td> <?php echo @$row['ip_address'];?></td>                      
                                        <td><?php echo @$row['activity_time'];?> </td>
                                      
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                      
                                      </div>
                                    </div>



                     </div><?php 
                  include ("footer.php");
                  ?>
                     </div>
                 
                    </div> 
                    </div>
                    <!-- Row END -->
                    
                                      
                    
                    
<?php
include ("script/script.php");
?>