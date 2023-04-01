<?php

include_once("connection/connection.php");


include ("delete_rep.php");
include ("create_rep_modal.php");

$con = connection();
$sql = "SELECT * FROM mis_man_inc_rep ORDER BY rep_id ASC";
$stud = $con->query($sql) or die($con->error);
$row = $stud->fetch_assoc();

?>

    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>

<br>
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </a></i><b>&nbsp;&nbsp; My Weekly Report's </b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts -->          
                            </h6>
                            <a href="" data-toggle="modal" data-target="#create_rep" class="btn btn-success btn-sm" style="background-color:#07177a; float: right;"> Submit Report </a>
                            </div>
                            

                                <div class="card-body">
                                <div class="table-responsive">
                               
                                <table id="example" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Type of Reports</th>
                                        <th>Description</th>         
                                        <th>Date</th>
                                        <th>Message</th>
                                        <th>Total</th>
                                        <th>Other's</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php do{ 
                                        if (!empty($row)){ ?>
                                        <tr>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['description'];?></td>                        
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['feedback'];?></td>
                                        <td><?php echo $row['number'];?></td>
                                        <td><?php echo $row['other'];?></td>
                                        <td>

<form action="delete_rep.php"  method="POST">
<a href="" data-toggle="modal" data-target="#exampleModalCenter5"<?php echo $row['rep_id']; ?>" style="text-decoration: none; font-size: 20px;">
<i class="bx bx-edit"></i>&nbsp;</a>

<button style="border: none; background: none; color: red; font-size: 20px;" type="submit" name="delete"><i class="bx bx-trash"></i>&nbsp;</button>
<input type="hidden" name="rep_id" value="<?php echo $row["rep_id"];?>">
</form>


                                         </td>
                                    </tr>
                                    <?php }}while($row = $stud->fetch_assoc()); ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>        
                                    </div>
                                    </div>
                                                        
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>