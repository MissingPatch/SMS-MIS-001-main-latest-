<?php
  session_start();
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
                                    <li><span class="bread-blod">Sanction Section</span>
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
  Create New Files
</button>
<table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th><center></center>              </th>
                                                <th><center>Control ID</center>    </th>
                                                <th><center>Academic Year</center> </th>
                                                <th><center>Department</center>    </th>
                                                <th><center>Document Type</center> </th>
                                                <th><center>Date of Post</center>  </th>
                                                <th><center>Action      </center>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");
                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_sanction WHERE is_archive = 0 ORDER BY document_sent_date DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    <tr>
                                                        
                                                    <td><input type="checkbox" name="select[]" value="' . $row['id'] . '"></td>
                                                    <td><?= $row["sanction_id"]; ?></td>
                                                    <td><?= $row["sanction_acad_year"]; ?></td>
                                                    <td><?= $row["sanction_department"]; ?></td>
                                                    <td><?= $row["sanction_type"]; ?></td>
                                                    <td><?= $row["document_sent_date"]; ?></td>
                                                    
                                                    
                                                    <td><center>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['sanction_id']; ?>"><i class="bi bi-info-circle"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered1<?= $row['sanction_id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="my_modal" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#archive<?= $row['sanction_id']; ?>"><i class="bi bi-archive-fill"></i></a>
                                                    </center></td>
                                                    


                                                    <!-- // Create modal for each record -->
                                                    <div class="modal fade" id="view<?= $row['sanction_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <h4 class='modal-title'>View Record</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <p><strong> Control ID: </strong><?= $row['sanction_id'];?></p>
                                                    <p><strong> Academic Year: </strong><?= $row['sanction_acad_year'];?></p>
                                                    <p><strong> Sanction Type: </strong><?= $row['sanction_type'];?></p>
                                                    <p><strong> To Department: </strong><?= $row['sanction_department'];?></p>
                                                    <p><strong> Reason: </strong><?= $row['sanction_reason'];?></p>
                                                    <p><strong> Date Posted: </strong><?= $row['document_sent_date'];?></p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                          <!-- Vertically centered Modal -->
              <div class="modal fade" id="archive<?= $row['sanction_id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Archive The Files</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <p><strong>Are you sure to Archive this Record?</strong></p>
                    <div class="modal-body" id="modal_content">
                    <form method="post" action="config/archive_sanction.php">
                    <input type="hidden" name="sanction_id" value="<?php echo $row['sanction_id']; ?>">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                      <button type="submit"   class="btn btn-primary"  name="archive" value="archive">Yes</button>
                    </div>
                   </form>
                  </div>
                </div>
              </div>

                                                   
              <!-- Vertically centered Modal -->
              <div class="modal fade" id="verticalycentered1<?= $row['sanction_id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Report</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" id="modal_content">
                     <form id="myForm<?= $row['sanction_id']; ?>" action="config/edit_sanction.php" method="post" enctype="multipart/form-data" novalidate>
                      <div>
                     <p> <strong> Control ID: </strong> <?= $row['sanction_id']; ?> </p>
                     <input type="hidden" name="sanction_id" value="<?= $row['sanction_id']; ?>">
                     <p> <strong> Academic Year: </strong> <?= $row['sanction_acad_year']; ?></p>
                     <input type="hidden" name="sanction_acad_year" value="<?= $row['sanction_acad_year']; ?>">
                     <label><strong>Sanction Type:</strong></label>
                     </br>
                    <div class="form-floating">
                    <input type="text" class="form-control" name="sanction_type" id="sanction_type" placeholder="Sanction Type" list="datalistOptions" autocomplete="off" value="<?= $row['sanction_type']; ?>">
                    <label for="floatingSubject">Sanction Type:</label>
                  </div>
                  <datalist id="datalistOptions">
                    <option value="Non-Compliance">
                    <option value="Habitually Submitting Late">
                    <option value="Non-Cooperation">
                    <option value="Misuse Confidential">
                    <option value="Others">
                  </datalist>
                  <label><strong>Department:</strong></label>
                </br>
                    <div class="form-floating">
                    <input type="text" class="form-control" name="sanction_department" id="sanction_department" placeholder="Department" list="datalistOptions1" autocomplete="off" value="<?= $row['sanction_department']; ?>">
                    <label for="floatingSubject">Department:</label>
                  </div>
                  <datalist id="datalistOptions1">
                    <option value="College of Computer Studies">
                    <option value="Bachelor of Science in Psychology">
                    <option value="Bachelor of Science in Office Administration">
                    <option value="Bachelor of Science in Tourism">
                  </datalist>
                    </select>
                    <label><strong>Reason:</strong></label>
                </br>
                    <div class="form-floating">
                    <input type="text" class="form-control" name="sanction_reason" id="sanction_reason" placeholder="Reason" autocomplete="off" value="<?= $row['sanction_reason']; ?>">
                    <label for="floatingSubject">Reason:</label>
                  </div>
                                                </br>
             
                
                    </br>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit"   class="btn btn-primary"  name="updatedata" >Submit</button>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New File</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="config/send_sanction.php" method="post" enctype="multipart/form-data">

 
        <label for="sanction_type">Document Type:</label>
        <select name="sanction_type" id="sanction_type">
                                                <?php
                                                   include("../includes/database.php");
                                                    $sql = "SELECT * FROM qa_sanction_type";
                                                    $result = mysqli_query($conn, $sql);

                                                        if (mysqli_num_rows($result) > 0) {
                                                // Output data of each row

                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                <option value="<?=$row["sanction_name_type"]?>"><?=$row["sanction_name_type"]?></option>

                                                <?php
                                                }
                                                                                          }

                                                    mysqli_close($conn);
                                                ?>
                                                        </select>
  <br> <br>
  <label for="sanction_department">Department:</label>
  <select name="sanction_department" id="sanction_department">
                                                <?php
                                                   include("../includes/database.php");
                                                   
                                                    $sql = "SELECT * FROM qa_department_type";
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
  <label for="sanction_reason">Reason:</label>
  <textarea id="sanction_reason" name="sanction_reason" rows="5" cols="40"></textarea>

  <br> <br>


  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success" name="adddata">Save changes</button>
      </div>
</form>
                                                </div>
    </div>
  </div>
</div>


















    </main>
  </body>
</html>


    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#sanction_id').val(data[0]);
                $('#sanction_id').val(data[1]);
                 $('#sanction_acad_year').val(data[2]);
                 $('#sanction_type').val(data[3]); 
                 $('#sanction_department').val(data[4]);
                 $('#document_sent_date').val(data[5]);
                 $('#sanction_reason').val(data[6]);
                 $('#sanction_name').val(data[7]);
                 
                
            });
        });
    </script>
    </script>
     <?php include 'includes/footer.php' ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>