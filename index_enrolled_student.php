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

                @$id = $_GET['ID'];
                $sql = "SELECT * FROM mis_usermanagement WHERE ID ='$id'";
                $sql = "SELECT * FROM mis_stud_info";
                $emp = $con->query($sql) or die($con->error);
                $row = $emp->fetch_assoc();
                


if ($result = mysqli_query($con, $sql)) {
  
// number of students
$rowcount = mysqli_num_rows( $result);
    
    
}

$sql1 = "SELECT * FROM mis_usermanagement";
if ($result1 = mysqli_query($con, $sql1)) {
  
    // number of employee
    $emp = mysqli_num_rows( $result1);
    
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
                    <p class="p mb-0 text-primary " style=" font-size: 20px; margin-top: 25px;">Enrolled Student</p>
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
                        Male Student</div>
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

    <!-- Teachers -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <a href="index_teacher.php" style="text-decoration:none; color:black;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" >
                            Female Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                            printf( $rowcount);?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300" href="studinfo.php"></i>
                    </div>
                </div>
            </div>
        </a>
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
                        Active Student</div>
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

    <!-- Teachers -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <a href="index_teacher.php" style="text-decoration:none; color:black;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" >
                            In-Active Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // Display result
                            printf( $rowcount);?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300" href="studinfo.php"></i>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>


   
    
<!-- Bar chart -->
<div class="col-xl-7 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">


<div id="app"></div>

<script type="text/babel">
  class ApexChart extends React.Component {
    constructor(props) {
      super(props);

      this.state = {
      
        series: [{
          data: [<?php echo ($rowcount);?>
                  , <?php echo ($rowcount);?>
                  , <?php echo ($rowcount);?>
                  , <?php echo ($rowcount);?>]
               }],
        options: {
          chart: {
            type: 'bar',
            height: 380
          },
          plotOptions: {
            bar: {
              barHeight: '100%',
              distributed: true,
              horizontal: true,
              dataLabels: {
                position: 'bottom'
              },
            }
          },
          colors: ['#33b2df', '#546E7A', '#d4526e', '#13d8aa'
          ],
          dataLabels: {
            enabled: true,
            textAnchor: 'start',
            style: {
              colors: ['#fff']
            },
            formatter: function (val, opt) {
              return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
            },
            offsetX: 0,
            dropShadow: {
              enabled: true
            }
          },
          stroke: {
            width: 1,
            colors: ['#fff']
          },
          xaxis: {
            categories: ['Regular Student', 'Old Student', 'Tranferee', 'In-active'
            ],
          },
          yaxis: {
            labels: {
              show: false
            }
          },
          title: {
              text: 'Enrolled Student',
              align: 'center',
              floating: true
          },
          subtitle: {
              text: 'Student Status',
              align: 'center',
          },
          tooltip: {
            theme: 'dark',
            x: {
              show: false
            },
            y: {
              title: {
                formatter: function () {
                  return ''
                }
              }
            }
          }
        },
      
      
      };
    }

  

    render() {
      return (
        <div>
          <div id="chart">
            <ReactApexChart options={this.state.options} series={this.state.series} type="bar" height={380} />
          </div>
          <div id="html-dist"></div>
        </div>
      );
    }
  }

  const domContainer = document.querySelector('#app');
  ReactDOM.render(React.createElement(ApexChart), domContainer);
</script>

</div>
            </div>
        </div>
    </div>

    
<!-- PIE CHART -->
<?php
// Query the database to retrieve payment method data
$sql = "SELECT program_code, count(*) as count FROM mis_stud_info GROUP BY stud_num";
$result = $con->query($sql);

$series = array();
$labels = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($series, $row["count"]);
        array_push($labels, $row["program_code"]);
    }
}

// Close the database connection

?>

<!-- PIE CHART -->
<div class="col-xl-5 col-md-4 mb-2 h-25">
    
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="index">
                    <p style="text-align:center;"><b> Program Statistics</b></p>
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