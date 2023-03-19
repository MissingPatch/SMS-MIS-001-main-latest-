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

include ("connection/connection.php");
$con = connection();
include ("include/header.php");
include ("include/sidebar.php");
include ("voiding_modal2.php");


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
                    <p class="p mb-0 text-primary " style=" font-size: 20px; margin-top: 25px;">Payment Statistics</p>
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

<!-- Graph Payment -->
<div class="col-xl-7 col-md-6 mb-4">

<div class="card-body">
<div class="row no-gutters align-items-center">

<div id="forecast"></div>

<div id="html">
  &lt;div id=&quot;chart&quot;&gt;
&lt;ReactApexChart options={this.state.options} series={this.state.series} type=&quot;bar&quot; height={350} /&gt;
&lt;/div&gt;
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <div class="card-body">   
 <div>
     <canvas id="myChart"></canvas>
 </div>
 <?php
     $sql = "SELECT DATE_FORMAT(date, '%b') AS month_name, YEAR(date) AS year, OR_number, COUNT(*) AS number FROM mis_payment_method WHERE MONTH(date) GROUP BY year, OR_number ORDER BY year, month_name ASC";
     $result = mysqli_query($con, $sql);
     $data = [];
     $month_names = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
     $data_array = array_fill(0, 12, 0); // Initialize the data array with zeros

     $total_paid = [];

     while ($row = mysqli_fetch_assoc($result)) {
         $month_index = array_search($row['month_name'], $month_names); // Get the index of the month
         $data_array[$month_index] += $row['number']; // Add the data for the corresponding month

         if (!isset($total_paid[$row['OR_number']])) {
             $total_paid[$row['OR_number']] = 0;
         }

         $total_paid[$row['OR_number']] += $row['number']; // Add the number of enrollees for the corresponding ID
     }

     // Get the total count of data in the table
     $total_result = mysqli_query($con, "SELECT COUNT(*) AS total FROM mis_payment_method");
     $total_count = mysqli_fetch_assoc($total_result)['total'];
 ?>

     <script>
         var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
             type: 'line',
             data: {
                 labels: <?php echo json_encode($month_names); ?>,
                 datasets: [{
                     label: 'Payment Statistics Every Month',
                     data: <?php echo json_encode($data_array); ?>,
                     backgroundColor: 'rgb(51, 102, 255)',
                     borderColor: 'rgba(54, 162, 235, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true
                         }
                     }]
                 },
                 title: {
                     display: true,
                     text: 'Total Enrollees: <?php echo $total_count; ?>'
                 }
             }
         });

         var ctx2 = document.getElementById('myChart2').getContext('2d');
         var myChart2 = new Chart(ctx2, {
             type: 'bar',
             data: {
                 labels: <?php echo json_encode(array_keys($total_paid)); ?>,
                 datasets: [{
                     label: 'Total Enrollees by ID',
                     data: <?php echo json_encode(array_values($total_paid)); ?>,
                     backgroundColor: 'rgba(54, 162, 235, 0.2)',
                     borderColor: 'rgba(54, 162, 235, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true
                         }
                     }]
                 }
             }
         });
                                                    </script>
                                            </div>  
                                        </div>

</div>
</div>

<!-- PIE CHART -->
<div class="col-xl-5 col-md-4 mb-2 h-25">
    
        <div class="card-body" style="border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div class="row no-gutters align-items-center">
                <div class="index">
                    <p style="text-align:center;"><b><i class="bx bxs-bank"></i> Payment Method </b></p>
                </div>
                <div id="pie" style="border: 1px solid grey;"></div>
              
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT payment_type, count(*) as count FROM mis_payment_method GROUP BY payment_type";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['payment_type']."',".$result['count']."],";
          }

         ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 900px; height: 300px;"></div>



                </div>
            </div>
        </div>


                <hr>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <b>Payment History</b>
                            <style type="text/css">
                            .icon {
                                color: #07177a;
                            }
                            </style>

                            <div style="float:right;">
                            <button type="button" class="fa-solid fa-file-excel icon" style="height:20px; width:40px;" onclick="exportTableToExcel('example', 'employees')"
                            style="background-color:#07177a; color:white; "></button>
                            </div>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            
                            </div>
                            <?php    
                             
                                $ql = "SELECT * FROM mis_payment_method ORDER BY OR_number DESC";
                                $pay = $con->query($ql) or die($con->error);
                                $row = $pay->fetch_assoc();
                             
                            ?>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>OR</th>
                                                <th>Student ID</th>
                                                <th>Name</th>  
                                                <th>Amount</th>                              
                                                <th>Payment Type</th>
                                                <th>Date</th>
                                                <th>Balance</th>
                                                <th>Payment Description</th>
                                                <th>Status</th>
                                                <th>Void Reason</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php do { ?>
                                            <tr>
                                                <td><?php echo $row['OR_number']; ?></td>
                                                <td><?php echo $row['student_num']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['payment_type']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['bal']; ?></td>
                                                <td><?php echo $row['payment_desc']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><?php echo $row['void_reason']; ?></td>
                                                <td>

                                                <form method="POST">
                                                  <input type="hidden" name="OR_number" value="<?php echo $row['OR_number'];?>"> 
                                                  <button type="button" class="btn btn-success" style="background-color:#07177a;" data-toggle="modal" 
                                                      data-target="#void<?php echo $row['OR_number']; ?>">
                                                      View
                                                  </button>
                                               </form>
                                                  <!--<a href="pms_view_receipt.php?OR_number=<//?php echo $row["OR_number"];?>" class="btn btn-success" style="background-color:#07177a;">View</a>
                                                    -->
                                               
                                                </td>
                                            </tr>
                                            <?php } while ($row = $pay->fetch_assoc()); ?>
                                        </tbody>
                                    </table>

                                    <script>
                                        $(document).on('click', '.btn-success', function() {
                                            var target = $(this).data('target');
                                            $(target).modal('show');
                                        });
                                    </script>
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
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                  
                    $pay = $con->query($ql) or die($con->error);
                    while ($row = $pay->fetch_assoc()) {
                       
                      ?>
              <div class="modal fade" id="void<?php echo $row['OR_number']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><b>Payment Receipt</b></h5>
                <hr>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              
      
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                    <img
                class="ms-5 ms-sm-3 my-auto"
                src="./images/logo.png"
                width="130"
                height="100"
                alt="bcp-logo"
                />
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                
                    <p>
                        <b><em>Date:</b> <?php echo $row['date']; ?></em>
                    </p>
                    <p>
                    <b><em>Receipt #:</b> <?php echo $row['OR_number']; ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h5>Official Receipt</h5>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Payment Description</th>
                            <th>Stud #.</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['payment_desc']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <em><?php echo $row['student_num']; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $row['amount']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['bal']; ?></td>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Year</th>
                            <th class="text-center">Program</th>
                            <th class="text-center">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['name']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <em><?php echo $row['yearlevel']; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $row['course']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['semester']; ?></td>
                        </td>
                        </tr>
                    </tbody>
                </table>

                <label>Void Reason:</label>
                  <select name="void_reason" class="form-control" id="void_reason">
                    <?php
                    $void_reasons = ["...","Duplicate payment", "Incorrect amount", "Wrong student","Cancelled transaction", "Other reasons:"];
                    foreach ($void_reasons as $reason) {
                      echo "<option value=\"$reason\">$reason</option>";
                    }
                    ?>
                  </select>

              
            </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal<?php echo $row['OR_number']; ?>" data-dismiss="modal">Void</button>
                  <button type="button" class="btn btn-primary"  onclick="printModalContent('login-modal<?php echo $row['OR_number']; ?>')">Print</button> 
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                                    <script>
                                    function printModalContent(modalId) {
                                    // Get the modal element
                                    var modal = document.getElementById(modalId);

                                    // Create a new element to hold the printable content
                                    var printContent = document.createElement('div');

                                    // Copy the modal content into the print element, omitting the button
                                    var modalContent = modal.querySelector('.modal-body').cloneNode(true);
                                    modalContent.removeChild(modalContent.lastElementChild); // Remove the "Print Receipt" button
                                    printContent.appendChild(modalContent);

                                    // Create a new window to print the content
                                    var printWindow = window.open('', 'Print', 'height=1500,width=1600');

                                    // Append the printable content to the print window document
                                    printWindow.document.body.appendChild(printContent);

                                    // Print the window
                                    printWindow.print();

                                    // Close the print window
                                    printWindow.close();
                                    }
                                    </script>
                           
                <?php } ?>
<?php
include ("script/script.php");
?>