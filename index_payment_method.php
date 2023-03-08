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

<script type="text/babel">
  class ApexChart extends React.Component {
    constructor(props) {
      super(props);

      this.state = {
      
        series: [{
          name: 'Inflation',
          data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
        }],
        options: {
          chart: {
            height: 350,
            type: 'bar',
          },
          plotOptions: {
            bar: {
              borderRadius: 10,
              dataLabels: {
                position: 'top', // top, center, bottom
              },
            }
          },
          dataLabels: {
            enabled: true,
            formatter: function (val) {
              return val + "%";
            },
            offsetY: -20,
            style: {
              fontSize: '12px',
              colors: ["#304758"]
            }
          },
          
          xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            position: 'top',
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            crosshairs: {
              fill: {
                type: 'gradient',
                gradient: {
                  colorFrom: '#D8E3F0',
                  colorTo: '#BED1E6',
                  stops: [0, 100],
                  opacityFrom: 0.4,
                  opacityTo: 0.5,
                }
              }
            },
            tooltip: {
              enabled: true,
            }
          },
          yaxis: {
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false,
            },
            labels: {
              show: false,
              formatter: function (val) {
                return val + "%";
              }
            }
          
          },
          title: {
            text: 'Monthly Payment Statistics, 2023',
            floating: true,
            offsetY: 330,
            align: 'center',
            style: {
              color: '#444'
            }
          }
        },
      
      
      };
    }

  

    render() {
      return (
        <div>
          <div id="chart">
            <ReactApexChart options={this.state.options} series={this.state.series} type="bar" height={350} />
          </div>
          <div id="html-dist"></div>
        </div>
      );
    }
  }

  const domContainer = document.querySelector('#forecast');
  ReactDOM.render(React.createElement(ApexChart), domContainer);
</script>

</div>
</div>
</div>




<!-- PIE CHART -->
<?php
// Query the database to retrieve payment method data
$sql = "SELECT payment_type, count(*) as count FROM mis_payment_method GROUP BY payment_type";
$result = $con->query($sql);

$series = array();
$labels = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($series, $row["count"]);
        array_push($labels, $row["payment_type"]);
    }
}

// Close the database connection

?>

<!-- PIE CHART -->
<div class="col-xl-5 col-md-4 mb-2 h-25">
    
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="index">
                    <p style="text-align:center;"><b> Payment Method</b></p>
                </div>
                <div id="pie"></div>
                <script type="text/babel">
                    class ApexChart extends React.Component {
                        constructor(props) {
                            super(props);
                            this.state = {
                                series: <?php echo json_encode($series); ?>,
                                options: {
                                    chart: {
                                        width: 380,
                                        type: 'pie',
                                    },
                                    labels: <?php echo json_encode($labels); ?>,
                                    responsive: [{
                                        breakpoint: 480,

                                        options: {
                                            chart: {
                                                width: 200
                                            },
                                            title: {
                                                float: true,
                                                text: 'My Pie Chart Title',
                                                fontSize: 18,
                                                fontColor: 'black'
                                            },
                                            legend: {
                                                position: 'bottom'
                                            }

                                        }
                                    }]
                                },
                            };
                        }

                        render() {
                            return (
                                <div>
                                    <div id="chartp">
                                        <ReactApexChart options={this.state.options} series={this.state.series} type="pie" width={380} />
                                    </div>
                                    <div id="htmlp-dist"></div>
                                </div>
                            );
                        }
                    }

                    const pie = document.querySelector('#pie');
                    ReactDOM.render(React.createElement(ApexChart), pie);
                </script>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
              
      
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                    <img
                class="ms-2 ms-sm-3 my-auto"
                src="./images/logo.png"
                width="100"
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
                <label>Void Reason:</label>
                <select name="void_reason" class="form-control" id="void_reason">
                <?php
                $void_reason = array("...","Duplicate payment", "Incorrect amount", "Wrong student",
                 "Cancelled transaction", "Other reasons:");
                foreach ($void_reason as $reason) {
                echo "<option value='$reason'>$reason</option>";
                }
                ?>
                </select>                     
            </div>
             <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Void</button>
  
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php } ?>

                                    
 
<?php
include ("script/script.php");
?>