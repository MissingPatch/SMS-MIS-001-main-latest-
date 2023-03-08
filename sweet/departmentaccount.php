<?php

session_start();

include("connection/connection.php");
include("includes/header.php");
include("includes/navbar.php"); 
include("editaccdepmodal.php");
include("addaccdepmodal.php");

$con = connection();
$sql = "SELECT * FROM loginform ORDER BY ID desc";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();



?>
    <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                          <!-- Data Tables Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Department Accounts
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addaccount" 
                            style="background-color:green; color:white; float:right;">
                            Add Account</button>          
                            </h6>
                            </div>
        
                       <div class="card-body">
                       <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" max-width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>FullName</th>                                
                            <th>Department</th>
                            <th>Role</th>
                            <th>Date_Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php do{ ?>
                        <td><?php echo $row['ID'];?> </td>
                        <td><?php echo $row['email'];?> </td>
                        
                        <td> <?php echo $row['fname'];?></td>   
                       
                                           
                        <td><?php echo $row['department'];?> </td>
                        <td><?php echo $row['role'];?> </td>
                        <td><?php echo $row['date_added'];?> </td>
                        <td>

  
                         <form action=" "  method="POST" >
                            <a href="empprofile.php?ID=<?php echo $row["ID"];?>" class="btn btn-success" style="background-color:#07177a;">View<i class="fas fa-edit" style="margin-left:5px;" >
                         </form>

                        </td>
                    </tr>
                    <?php }while($row = $emp->fetch_assoc()); ?>
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


   
