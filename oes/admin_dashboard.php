
<?php 

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userlogin'])){
    $_SESSION['userlogin'];
}
else{
    echo header("location:login.php");
}
include('includes/header.php');
include('includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();
?>

<div class="container-fluid">
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
                                </div>

                                <!-- Cards -->
                                <div class="row">
                                    
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            Enrollees</div>
                                                            <div class="row no-gutters align-items-center">
                                                                <?php
                                                                    $sql = "SELECT id FROM oes_student_application";
                                                                    $college = $conn->query($sql) or die($conn->error);
                                                                    $row = mysqli_num_rows($college);
                                                                    echo '<h1>'.$row.'</h1>';
                                                                ?> 
                                                            </div>
                                                        </div>
                                                    <div class="col-auto">
                                                    <i class="bi bi-person-circle" style="font-size: 50px;"></i>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Enrolled
                                                            </div>
                                                            <?php
                                                                    $sql = "SELECT id FROM oes_student_application WHERE status='Enrolled'";
                                                                    $college = $conn->query($sql) or die($conn->error);
                                                                    $row = mysqli_num_rows($college);
                                                                    echo '<h1>'.$row.'</h1>';
                                                            ?> 
                                                            </div>
                                                            <div class="col-auto">
                                                            <i class="bi bi-person-circle" style="font-size: 50px;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            Pending Application
                                                            
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php
                                                            $sql = "SELECT id FROM oes_student_application WHERE status='pending'";
                                                            $college = $conn->query($sql) or die($conn->error);
                                                            $row = mysqli_num_rows($college);
                                                            echo '<h1>'.$row.'</h1>';
                                                        ?>   
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                    <i class="bi bi-hourglass-split" style="font-size: 50px;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            Approved Application
                                                            
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php
                                                            $sql = "SELECT id FROM oes_student_application WHERE status='approved'";
                                                            $college = $conn->query($sql) or die($conn->error);
                                                            $row = mysqli_num_rows($college);
                                                            echo '<h1>'.$row.'</h1>';
                                                        ?>   
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                    <i class="bi bi-person-check" style="font-size: 50px;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

        
                                </div>
                                <!-- End of Cards -->

                                <!-- Analytics -->  
                                <div class="row">
                                    

                                <div class="col-xl-8 col-md-6 mb-4">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                                    <h6 class="m-0 font-weight-bold text-primary"><i class="bi bi-bar-chart"></i> Enrollment by Courses</h6>
                                                <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>   
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Action:</div>
                                                            <a class="dropdown-item" href="#">Convert as PNG</a>                        
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="card-body">   
                                                        <div>
                                                            <canvas id="myChart"></canvas>
                                                        </div>
                                                        <?php
                                                            $sql = "SELECT DATE_FORMAT(added_at, '%b') AS month_name, YEAR(added_at) AS year, id, COUNT(*) AS number FROM oes_student_application WHERE MONTH(added_at) GROUP BY year, id ORDER BY year, month_name ASC";
                                                            $result = mysqli_query($conn, $sql);
                                                            $data = [];
                                                            $month_names = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                                            $data_array = array_fill(0, 12, 0); // Initialize the data array with zeros

                                                            $total_enrollees = [];

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $month_index = array_search($row['month_name'], $month_names); // Get the index of the month
                                                                $data_array[$month_index] += $row['number']; // Add the data for the corresponding month

                                                                if (!isset($total_enrollees[$row['id']])) {
                                                                    $total_enrollees[$row['id']] = 0;
                                                                }

                                                                $total_enrollees[$row['id']] += $row['number']; // Add the number of enrollees for the corresponding ID
                                                            }

                                                            // Get the total count of data in the table
                                                            $total_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM oes_student_application");
                                                            $total_count = mysqli_fetch_assoc($total_result)['total'];
                                                        ?>

                                                            <script>
                                                                var ctx = document.getElementById('myChart').getContext('2d');
                                                                var myChart = new Chart(ctx, {
                                                                    type: 'line',
                                                                    data: {
                                                                        labels: <?php echo json_encode($month_names); ?>,
                                                                        datasets: [{
                                                                            label: 'Enrollees This Semester',
                                                                            data: <?php echo json_encode($data_array); ?>,
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
                                                                        labels: <?php echo json_encode(array_keys($total_enrollees)); ?>,
                                                                        datasets: [{
                                                                            label: 'Total Enrollees by ID',
                                                                            data: <?php echo json_encode(array_values($total_enrollees)); ?>,
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




                                    <div class="col-xl-4 col-lg-7">
                                    <div class="card shadow mb-4">
                                            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="bi bi-bar-chart"></i> Enrollees by Gender</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Action:</div>
                                            <a class="dropdown-item" href="#">Convert as PNG</a>
                                        
                                        </div>
                                    </div>
                                            </div>
                                        <div class="card-body">
                                                <div class="chart-area">
                                                    <canvas id="pieChart" width="400" height="400"></canvas>
                                                    <?php
                                                        $sql = "SELECT gender, count(*) as number FROM oes_student_application GROUP BY gender";
                                                        $bcp = mysqli_query($conn, $sql);
                                                        $data = [];
                                                        while ($result = mysqli_fetch_array($bcp)) {
                                                            $data[] = [
                                                            'gender' => $result['gender'],
                                                            'number' => $result['number']
                                                            ];
                                                        }
                                                    ?>
                                                </div>
                                                    <script>
                                                    var ctx = document.getElementById("pieChart").getContext("2d");
                                                        var pieChart = new Chart(ctx, {
                                                            type: 'pie',
                                                            data: {
                                                            labels: [<?php foreach ($data as $d) { echo '"' . $d['gender'] . '",'; } ?>],
                                                            datasets: [{
                                                                label: 'My First Dataset',
                                                                data: [<?php foreach ($data as $d) { echo $d['number'] . ',';} ?>],
                                                                backgroundColor: [
                                                                'rgb(255, 99, 132)',
                                                                'rgb(54, 162, 235)',
                                                                'rgb(255, 205, 86)'
                                                                ]
                                                            }]
                                                            }
                                                        });
                                                    </script>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    

                                <div class="col-xl-6 col-lg-7">
                                        <div class="card shadow mb-4">
                                                <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary"><i class="bi bi-bar-chart"></i> Enrollment by Courses</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                
                                            </a>   
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Action:</div>
                                            <a class="dropdown-item" href="#">Convert as PNG</a>                        
                                        </div>
                                    </div>
                                            </div>
                                        <div class="card-body">   
                                                <div class="chart-area">
                                                    <canvas id="barChart"></canvas>
                                                </div>  
                                                    <?php
                                                        $sql = "SELECT course, count(*) as number FROM oes_student_application GROUP BY course";
                                                        $bcp = mysqli_query($conn, $sql);
                                                        $data = [];
                                                        while ($result = mysqli_fetch_array($bcp)) {
                                                            $data[] = [
                                                            'course' => $result['course'],
                                                            'number' => $result['number']
                                                            ];
                                                        }
                                                    ?>
                                                    <script>
                                                    var ctx = document.getElementById("barChart").getContext("2d");
                                                    var barChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: [<?php foreach ($data as $d) { echo '"' . $d['course'] . '",'; } ?>],
                                                        datasets: [{
                                                        label: 'Count',
                                                        data: [<?php foreach ($data as $d) { echo $d['number'] . ',';} ?>],
                                                        backgroundColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(54, 162, 235)',
                                                            'rgb(255, 205, 86)'
                                                        ]
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                            beginAtZero: true,
                                                            min: 0,
                                                            max: 100
                                                            }
                                                        }]
                                                        }
                                                    }
                                                    });

                                                    </script>
                                        </div>  
                                    </div>
                                    </div>

                                    

                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                                                    <h6 class="m-0 font-weight-bold text-primary"><i class="bi bi-bar-chart"></i> Announcement</h6>
                                                </div>


                                                <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead > 
                                                                <tr>
                                                                <th></th>
                                                                    <th>Title</th>
                                                                    <th>Message</th>
                                                                    <th>Posted On:</th>
                                                                    
                                                                    
                                                                    
                                                                </tr>

                                                            </thead>    
                                                                <tbody>
                                                                    <?php
                                                                        $sql = "SELECT * FROM oes_admin_announcement";
                                                                        $college = $conn->query($sql) or die($conn->error);
                                                                        $row = $college->fetch_assoc();
                                                                    ?>

                                                                    <?php do{
                                                                        if (!empty($row)) { ?> 
                                                                        <tr><td><i class="bi bi-megaphone"></i></td>
                                                                            <td><strong>  <?php echo $row['title'];?>  </td>
                                                                            <td><strong>  <?php echo $row['body'];?></td>
                                                                            <td><strong>  <?php echo $row['added_on'];?> </td>
                                                                        </tr>
                                                                    <?php }
                                                                    } while($row = $college->fetch_assoc()); ?>
                            
                                                                </tbody>
                                                        </table>
                                                    </div>
                                        </div>
                                    </div>
                                </div>  
                                <!-- End of Analytics -->

                                <!--Data Tables-->
    
                                <div clas="row">
                                        <div class="col-xl-12 col-lg-1">
                                            <div class="card shadow mb-4">  
                                                <div class="card-body">


                                                    <form method="post" action="pdf.php" target="_blank">
                                                        <button type="submit" class="btn btn-danger" onclick="this.form.target='_blank';">
                                                            <i class="fas fa-file-pdf"></i> 
                                                        </button>
                                                    </form>


                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                                            <thead > 
                                                                <tr>
                                                                    
                                                                    <th>Student ID</th>
                                                                    <th>Image</th>
                                                                    <th>Full Name</th>
                                                                    <th>Course</th>
                                                                    <th>Major</th>
                                                                    <th>Year Level</th>
                                                                    <th>Student Type</th>
                                                                    <th>Submitted On</th>
                                                                    <th>Application Status</th>
                                                                    
                                                                </tr>

                                                            </thead>    
                                                                <tbody>
                                                                    <?php
                                                                        $sql = "SELECT * FROM oes_student_application";
                                                                        $college = $conn->query($sql) or die($conn->error);
                                                                        $row = $college->fetch_assoc();
                                                                    ?>

                                                                    <?php do{
                                                                        if (!empty($row)) { ?> 
                                                                        <tr>
                                                                            <td><strong><?php echo $row['id'];?>  </td>
                                                                            <td><img src="./uploads/<?php echo $row['enrollment_img']; ?>" alt="Enrollment Image" width="70" height="70"></td>
                                                                            <td><strong>  <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></td>
                                                                            <td><strong>  <?php echo $row['course'];?> </td>
                                                                            <td><strong>  <?php echo $row['major'];?> </td>
                                                                            <td><strong>  <?php echo $row['year_level'];?> </td>
                                                                            <td><strong>  <?php echo $row['student_type'];?> </td>
                                                                            <td><strong>  <?php echo $row['added_at'];?> </td>
                                                                            <td>
                                                                                <strong>
                                                                                    <?php if ($row['status'] == 'Pending') { ?>
                                                                                        <i class="fa fa-times-circle text-secondary">Pending</i>
                                                                                    <?php } else if ($row['status'] == 'Rejected') { ?>
                                                                                        <i class="fa fa-times-circle text-danger">Rejected</i>    
                                                                                    <?php } else if ($row['status'] == 'Approved') { ?>
                                                                                        <i class="fa fa-check-circle text-success">Approved</i>
                                                                                    <?php } else if ($row['status'] == 'Enrolled') { ?>
                                                                                        <i class="fa fa-check-circle text-success">Enrolled</i>
                                                                                    <?php } ?>
                                                                                    <span class="status-text"> <?php $row['status'];?> </span>
                                                                                </strong>
                                                                            </td>
                                                                        
                                                                        
                                                                        </tr>
                                                                    <?php }
                                                                    } while($row = $college->fetch_assoc()); ?>
                            
                                                                </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>             
                                        </div>
                                </div>

                                <!--End of Data Tables-->
                    <!-- End of Page Content -->
                </div>
            </div>
        </div>
    </div>                     
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
