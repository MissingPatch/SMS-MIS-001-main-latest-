<?php

  session_start();
  include("../includes/database.php");
//   header("Refresh: 5");
  error_reporting(0);

//   if(!$_SESSION['auth']) {
//     header('location:../index.php');
//   }
//   else {
//     $currentTime = time();
//     if($currentTime > $_SESSION['expire']) {
//       session_unset();
//       session_destroy();
//       header('location:../index.php');
//     }
//     else {

// }
//   }
  
?>

<?php include 'includes/headers.php' ?>
<?php include 'includes/navbar.php' ?>
  <body class="materialdesign">
    

        
  <div class="container-fluid">
  <div class="income-order-visit-user-area">
        <div class="container-fluid">
        <div class="card">
            <div class="card-body m-3">
            <div class="row">

                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">

                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Total Files</h2>
                                <div class="main-income-phara">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"> 
                        <?php
                        $sql="SELECT * from qa_sanction";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"></span>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Number of Files</p>
                                <span class="income-percentange"> 
                        <?php
                        $sql="SELECT * from qa_sanction";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?> <i class="fa fa-folder"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Active Files</h2>
                                <div class="main-income-phara visitor-cl">
                                <p><i class="fa big-icon fa-th-list fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">
                        <?php
                        $sql="SELECT * from qa_sanction WHERE is_archive = 0";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>Number of File</p>
                                <span class="income-percentange">
                        <?php
                        $sql="SELECT * from qa_sanction WHERE is_archive = 0";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?> <i class="fa fa-file"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Accridited Department</h2>
                                <div class="main-income-phara low-value-cl">
                                    <p><i class="fa big-icon fa-building fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">
                                    <?php
                        $sql="SELECT * from qa_department_type";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?>
                                    </span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline5"></span>
                                </div>
                            </div>
                            <div class="income-range low-value-cl">
                                <p>Number of Departments</p>
                                <span class="income-percentange">
                                <?php
                        $sql="SELECT * from qa_department_type";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?>
                                <i class="fa fa-building"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                
</br>            
               

<div class="card">
            <div class="card-body m-3">
            <div class="row">
                  <div class="col-lg-6">
            <label>Most Sanction Department</label>
    <?php
    
// Connect to the database
include("../includes/database.php");

// Retrieve the data
$query = "SELECT sanction_department, COUNT(*) as num_files FROM qa_sanction WHERE is_archive = 0 GROUP BY sanction_department";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[$row['sanction_department']] = $row['num_files'];
}

// Set up the Google Charts API URL
$api_url = "https://chart.googleapis.com/chart?cht=p&chs=1000x250&chd=t:";
$api_url .= implode(",", $data);
$api_url .= "&chl=";
$api_url .= implode("|", array_keys($data));

// Output the chart

echo "<img src=\"$api_url\">";
?>
</div>

<div class="col-lg-6">
<label>Most Used Sanction Type</label>
<?php
// Connect to the database
include("../includes/database.php");

// Retrieve the data
$query = "SELECT sanction_type, COUNT(*) as num_files FROM qa_sanction WHERE is_archive = 0 GROUP BY sanction_type";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[$row['sanction_type']] = $row['num_files'];
}

// Set up the Google Charts API URL
$api_url = "https://chart.googleapis.com/chart?cht=p&chs=1000x250&chd=t:";
$api_url .= implode(",", $data);
$api_url .= "&chl=";
$api_url .= implode("|", array_keys($data));

// Output the chart

echo "<img src=\"$api_url\">";
?>
</div>
</div>
</div>
</div>
<div class="card mt-3">
    <div class="card-body">
    <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th><center></center>    </th>
                                                <th><center>Control ID</center>    </th>
                                                <th>Academic Year                  </th>
                                                <th><center>Department</center>    </th>
                                                <th><center>Document Type</center> </th>
                                                <th><center>Date of Post</center>  </th>
                                                <th>Action                         </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               // Connect to MySQL database
                                              include("../includes/database.php");
                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_sanction WHERE is_archive = 0 ORDER BY document_sent_date DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    <tr>
                                                        
                                                    <td><input type="checkbox" name="select[]" value="' . $row['id'] . '"></td>
                                                    <td><?= $row["sanction_id"]; ?></td>
                                                    <td><?= $row["sanction_acad_year"]; ?></td>
                                                    <td><?= $row["sanction_department"]; ?></td>
                                                    <td><?= $row["sanction_type"]; ?></td>
                                                    <td><?= $row["document_sent_date"]; ?></td>
                                                    
                                                    
                                                    <td>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['sanction_id']; ?>"><i class="bi bi-info-circle"></i></a>                                                
                                                    </td>

                                                    


                                                    <!-- // Create modal for each record -->
                                                    <div class="modal fade" id="view<?= $row['sanction_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <h4 class='modal-title'>View Record</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <p><strong> Control ID: </strong><?= $row['sanction_id'];?></p>
                                                    <p><strong> Academic Year: </strong><?= $row['sanction_acad_year'];?></p>
                                                    <p><strong> Sanction Type: </strong><?= $row['sanction_type'];?></p>
                                                    <p><strong> To Department: </strong><?= $row['sanction_department'];?></p>
                                                    <p><strong> Reason: </strong><?= $row['sanction_reason'];?></p>
                                                    <p><strong> Date Posted: </strong><?= $row['document_sent_date'];?>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                    
                                                            
                                                    <?php 
                                                    
                                                } ?>
                                            </tbody>
                                        </table>  
                                   </div>  
                                   </div>
                                   </body>
                                            </div>
      </div> 
    </main>
    <?php include 'includes/footers.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>