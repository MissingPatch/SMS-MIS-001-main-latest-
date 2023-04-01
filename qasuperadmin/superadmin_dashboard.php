<?php

  session_start();
  include("../includes/database.php");
//   header("Refresh: 5");
//   error_reporting(0);

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



<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>
<body class="materialdesign">
 <div class="container-fluid">



         
          <div class="income-order-visit-user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Files</h2>
                                <div class="main-income-phara">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php
                        $sql="SELECT * from qa_send_document ";
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
                                <span class="income-percentange"><?php
                        $sql="SELECT * from qa_send_document ";
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
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Accomplish Files</h2>
                                <div class="main-income-phara order-cl">
                               
                                <p> <i class="fa big-icon fa-solid fa-folder-open fa-2x"></i></p>
                               
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php
                        $sql="SELECT * from qa_documents";
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
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>Total of Done files</p>
                                <span class="income-percentange">
                                    <?php
                        $sql="SELECT * from qa_documents ";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?>         <i class="fa-solid fa-folder-open"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Active Document</h2>
                                <div class="main-income-phara visitor-cl">
                                <p><i class="fa big-icon fa-th-list fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php
                        $sql="SELECT * from qa_send_document WHERE is_archive = 0";
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
                                <p>Number of File Active</p>
                                <span class="income-percentange"><?php
                        $sql="SELECT * from qa_send_document WHERE is_archive = 0";
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
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Departments</h2>
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
                        $sql="SELECT * from qa_department_type WHERE department_status =0";
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
</br> 
          <div class="row">
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Files</h2>
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
                        $sql="SELECT * from qa_received_document";
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
                                <p>Approved Files</p>
                                <span class="income-percentange"> <?php
                        $sql="SELECT * from qa_received_document WHERE status = 'Approve'";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?> <i class="fa fa-thumbs-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Files</h2>
                                <div class="main-income-phara order-cl">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"> <?php
                        $sql="SELECT * from qa_received_document ";
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
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>Rejected Files</p>
                                <span class="income-percentange"> <?php
                        $sql="SELECT * from qa_received_document WHERE status = 'Reject'";
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
                                <h2>Files</h2>
                                <div class="main-income-phara visitor-cl">
                                <p><i class="fa big-icon fa-folder-open fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"> <?php
                        $sql="SELECT * from qa_received_document ";
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
                                <p>For Review Files</p>
                                <span class="income-percentange"> <?php
                        $sql="SELECT * from qa_received_document WHERE status = 'Pending'";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count; ?> <i class="fa fa-eye"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>

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
<div class="card">
            <div class="card-body m-3">
            <div class="row">
                <label>File Accomplish Record</label>
    <?php
// Connect to the database
include("../includes/database.php");

// Retrieve the data
$query = "SELECT department, COUNT(*) as num_files FROM qa_documents GROUP BY department";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[$row['department']] = $row['num_files'];
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
      <div class="card">
            <div class="card-body m-3">
            <div class="row">
                <label>For Review</label>
    <?php
// Connect to the database
include("../includes/database.php");

// Retrieve the data
$query = "SELECT status, COUNT(*) as num_files FROM qa_received_document GROUP BY status";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    
    $data[$row['status']] = $row['num_files'];
    
                        	                           
    
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
</br>
<div class="card">
    <div class="card-body">
    <div class="row">
                                    <div class="col-lg-12">
                                    <table class="table table-striped" style="border-radius: 15px; overflow: hidden;" id="example">
                                            <thead>
                                                <tr>
                                                <th><center>Document ID             </center></th>
                                                <th><center>Academic Year           </center></th>
                                                <th><center>Document Type           </center></th>
                                                <th><center>Document From           </center></th>
                                                <th><center>Document Sent Date      </center></th>
                                                <th><center>Action                  </center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");
                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_received_document WHERE status = 'Approve' ORDER BY document_sent_date DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                    <td><?= $row['control_id']; ?></td>
                                                    <td><?= $row['acad_year']; ?></td>
                                                    <td><?= $row['section']; ?></td>
                                                    <td><?= $row['sent_to']; ?></td>
                                                    <td><?= $row['document_sent_date']; ?></td>

                                                    <td>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['control_id']; ?>"><i class="bi bi-info-circle"></i></a>
                                                  
                                                
                                                    <!-- // Create modal for each record -->
                                                    <div class="modal fade" id="view<?= $row['control_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <h4 class='modal-title'>View Record</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <p><strong> Control ID: </strong><?= $row['control_id'];?></p>
                                                    <p><strong> Academic Year: </strong><?= $row['acad_year'];?></p>
                                                    <p><strong> Section Type: </strong><?= $row['section'];?></p>
                                                    <p><strong> Department: </strong><?= $row['department'];?></p>
                                                    <p><strong> Document Sent Date: </strong><?= $row['document_sent_date'];?></p>
                                                    <p><strong> Document Due Date: </strong><?= $row['document_due_date'];?></p>
                                                    <p><strong> Document Name: </strong><?= $row['document_name'];?></p>
                                                    
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                            
                                                    <?php } ?>
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


 </div>
 </div>

  
        
</div>
      </div>
     
    </main>
  </body>
</html>
<?php include 'includes/footer.php' ?>
  
    