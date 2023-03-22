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
include("stud_pms_modal.php");
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
                     label: 'Payment Statistics Monitoring',
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

                                               <div class="btn-group" role="group">
                                                <a href="#" data-toggle="modal" data-target="#void<?php echo $row['OR_number']; ?>"
                                                class="btn btn-primary btn-sm" style="background-color: #07177a;">View</a>&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#studedit<?php echo $row['OR_number']; ?>"
                                                class="btn btn-primary btn-sm" style="background-color: #07177a;">Edit</a>
                                               </div>
                                                <!--<a href="pms_view_receipt.php?OR_number=<//?php echo $row["OR_number"];?>" class="btn btn-success" style="background-color:#07177a;">View</a>
                                                    -->
                                               
                                                </td>
                                            </tr>
                                            <?php } while ($row = $pay->fetch_assoc()); ?>
                                        </tbody>
                                    </table>
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
include ("script/script.php");
?>