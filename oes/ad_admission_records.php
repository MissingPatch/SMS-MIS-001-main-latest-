
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


        <!-- Begin Page Content -->
            <div class="container-fluid">

                        <!-- DataTables Example -->
                        
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="col text-center">
                                <h3 class="m-0 font-weight-bold text-primary">Student Application</h3>

                            </div>
                        </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                            <thead>

                                                
                                                <tr>
                                                    
                                                    <th>Student ID</th>
                                                    <th>Full Name</th>
                                                    <th>Course</th>
                                                    <th>Submitted On</th>
                                                    <th>Student Status</th>
                                                    <th>Student Type</th>
                                                    <th>Year Level</th>
                                                    <th>Confirmed By</th>
                                                    
                                                </tr>

                                            </thead>    
                                                <tbody>
                                                <?php
                                                    $sql = "SELECT * FROM oes_student_application WHERE status='Enrolled'";
                                                    $college = $conn->query($sql) or die($conn->error);
                                                    $row = $college->fetch_assoc();
                                                ?>

                                                <?php do{
                                                    if (!empty($row)) { ?>  
                                                    <tr>
                                                    <td><strong>  <?php echo $row['id'];?>  </td>
                                                    <td><strong>  <?php echo $row['firstname'];?> <?php echo $row['middlename'];?> <?php echo $row['lastname'];?></td>
                                                    <td> <strong><?php echo $row['course'];?> </td>
                                                    <td> <strong><?php echo $row['added_at'];?> </td>
                                                    <td> <strong><?php echo $row['status'];?> </td>
                                                    <td> <strong><?php echo $row['student_type'];?> </td>
                                                    
                                                    <td> <strong><?php echo $row['year_level'];?></td>
                                                    <td><strong>Registrar Admin</td>
                                                                            
                                                    </tr>
                                                    <?php }
                                                    } while($row = $college->fetch_assoc()); ?>
                                                
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    <!-- End of DataTables -->
            </div>
        <!-- End of Page Content -->

    </section>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
