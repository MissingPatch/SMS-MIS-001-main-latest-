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


<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>
<body class="materialdesign">
 <div class="container-fluid">

        
<!-- Breadcome start-->
    <!-- <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="pmed_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcome End -->


    <!-- income order visit user Start -->
    <div class="income-order-visit-user-area">
        <div class="container-fluid">
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
       
    
        
</div>
      </div>
     
    </main>
    <?php include 'includes/footer.php' ?>