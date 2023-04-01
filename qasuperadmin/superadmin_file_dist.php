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
                                    <li><a href="superadmin_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">File Distribution</span>
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
                        <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#create">
  Create New Files
</button>

                                <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                     <th></th>
                                                     <th><center>Control ID    </center></th>
                                                     <th><center>Academic Year </center></th>
                                                     <th><center>Department    </center></th>
                                                     <th><center>Document Type </center></th>
                                                     <th><center>Date of Post  </center></th>
                                                     <th><center>Due Date      </center></th>
                                                     <th data-field="action"><center>Action </center></th>
                                                 </tr>
                                            </thead>
                                            <?php
                                               // Connect to MySQL database
                                                include("../includes/database.php");

                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_send_document WHERE is_archive = 0 ORDER BY document_sent_date DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    <tr>
                                                        
                                                    <td><input type="checkbox" name="select[]" value="' . $row['id'] . '"></td>
                                                    <td><?= $row["control_id"]; ?></td>
                                                    <td><?= $row["document_academic_year"]; ?></td>
                                                    <td><?= $row["department"]; ?></td>
                                                    <td><?= $row["section"]; ?></td>
                                                    <td><?= $row["document_sent_date"]; ?></td>
                                                    <td><?= $row["document_due_date"]; ?></td>
                                                    
                                                 
                                                    <td>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['control_id']; ?>"><i class="bi bi-info-circle"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered1<?= $row['control_id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <br>
                                                    <a href="my_modal" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#archive<?= $row['control_id']; ?>"><i class="bi bi-archive-fill"></i></a>
                                                    <a href="../admin/config/upload/<?php echo $row['document_name']; ?>" class="btn btn-sm btn-primary"><i class="bi bi-download"></i></a>
                                                    </td>
                                                    


                                                    <!-- // Create modal for each record -->
                                                    <div class="modal fade" id="view<?= $row['control_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <h4 class='modal-title'>View Record</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <p><strong> Control ID: </strong><?= $row['control_id'];?></p>
                                                    <p><strong> Academic Year: </strong><?= $row['document_academic_year'];?></p>
                                                    <p><strong> Document Type: </strong><?= $row['section'];?></p>
                                                    <p><strong> To Department: </strong><?= $row['department'];?></p>
                                                    <p><strong> Date Posted: </strong><?= $row['document_sent_date'];?></p>
                                                    <p><strong> Due Date: </strong><?= $row['document_due_date'];?></p>
                                                    <p><strong> Document: </strong><?= $row['document_name'];?></p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <a href="../admin/config/upload/<?php echo $row['document_name']; ?>"  target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                    <a href="../admin/config/upload/<?php echo $row['document_name']; ?>" class="btn btn-sm btn-primary"><i class="bi bi-download"></i></a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>


                                    <!-- Vertically centered Modal -->
                                                     <div class="modal fade" id="archive<?= $row['control_id']; ?>" tabindex="-1">
                                                        <div class="modal-dialog">
                                                         <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title">Archive The Files</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                        <p><strong>Are you sure to Archive this Record?</strong></p>
                                                        <div class="modal-body" id="modal_content">
                                                        <form method="post" action="config/archive_document_sent.php">
                                                        <input type="hidden" name="control_id" value="<?php echo $row['control_id']; ?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit"   class="btn btn-primary"  name="archive" value="archive">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                     </div>

                                                     <!-- Vertically centered Modal -->
              <div class="modal fade" id="verticalycentered1<?= $row['control_id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Report</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" id="modal_content">
                     <form id="myForm<?= $row['control_id']; ?>" action="config/update_document.php" method="post" enctype="multipart/form-data" novalidate>
                      <div>
                     <p> <strong> Control ID: </strong> <?= $row['control_id']; ?> </p>
                     <input type="hidden" name="control_id" value="<?= $row['control_id']; ?>">
                     <p> <strong> Academic Year: </strong> <?= $row['document_academic_year']; ?></p>
                     <p> <strong> Date Posted: </strong> <?= $row['document_sent_date']; ?></p>
                     <input type="hidden" name="document_sent_date" value="<?= $row['document_sent_date']; ?>">
                     <input type="hidden" name="document_academic_year" value="<?= $row['document_academic_year']; ?>">
                     <label><strong>Document Type:</strong></label>
                     </br>
                    <div class="form-floating">
                    <input type="text" class="form-control" name="section"  id="section" placeholder="Document Type" list="datalistOptions" autocomplete="off" value="<?= $row['section']; ?>">
                    <label for="floatingSubject">Document Type:</label>
                  </div> 
                  <datalist id="datalistOptions">
                    <option value="Section 1:Purpose and Objective">
                    <option value="Section 2:Faculty">
                    <option value="Section 3:Instruction">
                    <option value="Section 4:Library">
                    <option value="Section 5:Laboratories">
                    <option value="Section 6:Physical Plant and Facilities">
                    <option value="Section 7:Student Personnel Services">
                    <option value="Section 8:Social Orientation and Community Involvement">
                    <option value="Section 9:Organization & Administration">
                  </datalist>
                   <label><strong>Departments:</strong></label>
                     </br>
                   <div class="form-floating">
                    <input type="text" class="form-control" name="department"  id="department" placeholder="departments" list="datalistOptions" autocomplete="off" value="<?= $row['department']; ?>">
                    <label for="floatingSubject">Departments:</label>
                  </div> 
                  <datalist id="datalistOptions">
                    <option value="College of Computer Studies">
                    <option value="Bachelor of Science in Psychology">
                    <option value="Bachelor of Science in Office Administration">
                    <option value="Bachelor of Science in Tourism">
                  </datalist>
                    <label><strong>Due Date:</strong></label>
                </br>
                    <div class="form-floating">
                    <input type="date" class="form-control" name="document_due_date" id="document_due_date" placeholder="Reason" autocomplete="off" value="<?= $row['document_due_date']; ?>">
                    <label for="floatingSubject">Due Date:</label>
                     </div></br>
                     <label><strong>Update Attach File:</strong></label>
                </br>
                     <div class="form-floating">
                    <input type="file" name="file" id="file">
                     </div>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Distribute New File</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="config/send_document.php" method="post" enctype="multipart/form-data">
        <label for="department">Document Type:</label>
        <select name="type" id="type">
                                                <?php
                                                     include("../includes/database.php");

                                                    $sql = "SELECT * FROM qa_document_type";
                                                    $result = mysqli_query($conn, $sql);

                                                        if (mysqli_num_rows($result) > 0) {
                                                // Output data of each row

                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                <option value="<?=$row["document_type_name"]?>"><?=$row["document_type_name"]?></option>

                                                <?php
                                                }
                                                                                          }

                                                    mysqli_close($conn);
                                                ?>
                                                        </select>
  <br> <br>
  <label for="department">Department:</label>
  <select name="department" id="department">
                                                <?php
                                                    include("../includes/database.php");

                                                    $sql = "SELECT * FROM qa_department_type WHERE department_status=0";
                                                    $result = mysqli_query($conn, $sql);

                                                        if (mysqli_num_rows($result) > 0) {
                                                // Output data of each row

                                                        while($row = mysqli_fetch_assoc($result)){
                                                            ?>
                                                        <option value="<?=$row["department_name"]?>"><?=$row["department_name"]?></option>

                                                        <?php
                                                        }
                                      
                                                    }

                                                    mysqli_close($conn);
                                                ?>
                                                        </select>
        <br> <br>
  <label for="due_date">Due Date:</label>
  <input type="date" id="due_date" name="due_date">
  <br> <br>

  <label for="file">Attachment:</label>
  <input type="file" id="file" name="file">
  <br> <br>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success ">Upload</button>
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