<?php
  session_start();
//   header("Refresh: 5");
  include("../includes/database.php");
?>
<?php include 'includes/header.php' ?>

  <body class="materialdesign">
    
  <?php include 'includes/navbar.php' ?>
        
   <div class="container-fluid">


        <!-- bread crumps start -->
        <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="admin_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Department</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
        <!-- bread crumps end -->

                               
                                <div class="card">
                        <div class="card-body">
                      
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#create">
 Add New Department
</button>

                                <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                     <th></th>
                                                     <th><center>Department Code          </center></th>
                                                     <th><center>Department Name          </center></th>
                                                     <th><center>Program Head/Dean        </center></th>
                                                     <th><center>Status                   </center></th>
                                                    
                                                     <th data-field="action"><center>Action </center></th>
                                                 </tr>
                                            </thead>
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");

                                                // Check connection
                                                if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                                }

                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_department_type";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    <tr>
                                                    
                                                    <td><input type="checkbox" name="select[]" value="' . $row['id'] . '"></td>
                                                    <td><?= $row["dept_code"]; ?></td>
                                                    <td><?= $row["department_name"]; ?></td>
                                                    <td><?= $row["department_program_name"]; ?></td>
                                                    <td><?php 
                        	                           if($row['department_status'] == "0"){
						  	                        	echo "<span class='badge rounded-pill  bg-info'>Active</span> ";
                        	                            }elseif($row['department_status'] == "1"){
						  		                        echo "<span class='badge rounded-pill  bg-secondary'>Disable</span>";
                                                    	}
                        	                            ?></td>
                                           
                                                    <td>
                                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered1<?= $row['department_id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="my_modal" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#inactive<?= $row['department_id']; ?>">Disable</i></a>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#active<?= $row['department_id']; ?>">Active</i></a>
                                                    </td>
                                                    


                                                   


                                    <!-- Vertically centered Modal -->
                                                     <div class="modal fade" id="active<?= $row['department_id']; ?>" tabindex="-1">
                                                        <div class="modal-dialog">
                                                         <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title">Active Department</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                        <p><strong>Are you sure to Active this Department?</strong></p>
                                                        <div class="modal-body" id="modal_content">
                                                        <form method="post" action="config/active_department.php">
                                                        <input type="hidden" name="department_id" value="<?php echo $row['department_id']; ?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit"   class="btn btn-primary"  name="active" value="active">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                     </div>

                                                     <!-- Vertically centered Modal -->
                                                     <div class="modal fade" id="inactive<?= $row['department_id']; ?>" tabindex="-1">
                                                        <div class="modal-dialog">
                                                         <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title">Disable Department</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                        <p><strong>Are you sure to Disable this Department?</strong></p>
                                                        <div class="modal-body" id="modal_content">
                                                        <form method="post" action="config/disable_department.php">
                                                        <input type="hidden" name="department_id" value="<?php echo $row['department_id']; ?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit"   class="btn btn-primary"  name="disable" value="disable">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                     </div>

                                                     <!-- Vertically centered Modal -->
              <div class="modal fade" id="verticalycentered1<?= $row['department_id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Department</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" id="modal_content">
                     <form id="myForm<?= $row['department_id']; ?>" action="config/edit_department.php" method="post" enctype="multipart/form-data" novalidate>
                      <div>
                     <input type="hidden" name="department_id" value="<?= $row['department_id']; ?>">
                     <p> <strong> Department Code: </strong>  </p>
                     <input type="text" name="dept_code" value="<?= $row['dept_code']; ?>">
                     <p> <strong> Department Name: </strong>  </p>
                     <input type="text" name="department_name" value="<?= $row['department_name']; ?>">
                     <p> <strong> Department Program Head/Deans: </strong> </p>
                     <input type="text" name="department_program_name" value="<?= $row['department_program_name']; ?>">
                    </br>
                    </br>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit"   class="btn btn-primary"  name="updatedata" value="updatedata">Submit</button>
                    </div>
                   </form>
                  </div>
                </div>
              </div>
              <!-- End Vertically centered Modal-->
    
        
 



























                  
                                                    <?php 
                                                    
                                                } ?>
                                            </tbody>
                                        </table> 
                                   </div>  
                                   </div>    
                                   </div>
                                   </div>






        <!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Department</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="config/add_department.php" method="post" enctype="multipart/form-data">
    <label for="department_name">Department Code:</label>
		<input class="mb-3" type="text" name="dept_code" id="dept_code"><br>
    <label for="department_name">Department Name:</label>
		<input class="mb-3" type="text" name="department_name" id="department_name"><br>
		<label for="department_program_name">Program Head/Dean:</label>
		<input type="text" name="department_program_name" id="department_program_name"><br>

  <br> <br>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit"  class="btn btn-success ">Save changes</button>
      </div>
</form>
      
    </div>
  </div>
</div>
    </main>
  </body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <?php include 'includes/footer.php' ?>