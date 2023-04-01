
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
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>

                                                
                                                <tr>
                                                    
                                                    <th>Student Id</th>
                                                    <th>Name</th>
                                                    <th>Course</th>
                                                    <th>Status</th>
                                                    <th>Email</th>
                                                    <th>Phone No.</th>
                                                    <th>Student Type</th>
                                                    <th>Date Enrolled</th>
                                                    
                                                </tr>

                                            </thead>    
                                                <tbody>
                                                <?php
                                                    $sql = "SELECT * FROM oes_student_application WHERE status='Pending'" ;
                                                    $college = $conn->query($sql) or die($conn->error);
                                                    $row = $college->fetch_assoc();
                                                ?>

                                                <?php do{?> 
                                                    <tr>
                                                    <td> 19010338 </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    <td> Example </td>
                                                    
                                                    
                                                    </tr>
                                                    <?php }while($row = $college->fetch_assoc());?>
                                                
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
