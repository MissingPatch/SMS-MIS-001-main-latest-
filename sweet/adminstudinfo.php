<?php


if(!isset($_SESSION)){
    session_start();
}


include_once("connection/connection.php");
include ("includes/header.php");
include ("includes/adminnavbar.php");
$con = connection();

$sql = "SELECT * FROM stud ORDER BY stud_num";
$stud = $con->query($sql) or die($con->error);
$row = $stud->fetch_assoc();

?>
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Stud_#</th>
                                        <th>Course Applied</th>
                                        <th>First Name</th>           
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Year</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ ?>
                                        <tr>
                                        <td><?php echo $row['stud_num'];?> </td>
                                        <td><?php echo $row['course'];?> </td>
                                        <td> <?php echo $row['lname'];?></td>                        
                                        <td><?php echo $row['fname'];?> </td>
                                        <td><?php echo $row['email'];?> </td>
                                        <td> <?php echo $row['ylvl'];?></td>                        
                                        <td><?php echo $row['bal'];?> </td>
                                        <td>
                                            <button type="submit" style='background-color: blue; /* RED */
                                                                                        border: none;
                                                                                        color: white;
                                                                                        padding: 5px 10px;
                                                                                        text-align: center;
                                                                                        text-decoration: none;
                                                                                        display: inline-block;
                                                                                        font-size: 16px;' >View</button> 
                                    </td>
                                    </tr>
                                    <?php }while($row = $stud->fetch_assoc()); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                </div>   
              
                      
                <!-- /.container-fluid -->

            
            
        



    <?php   
include ("includes/script.php");
include ("includes/footer.php");
?>