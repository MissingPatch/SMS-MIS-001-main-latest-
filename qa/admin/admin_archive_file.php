<?php
  session_start();
  include("../includes/database.php");
?>

<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>
<body class="materialdesign">
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
                                    <li><span class="bread-blod">Archive</span>
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
<table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                            <th></th>
                                                     <th><center>Control ID     </center></th>
                                                     <th><center>Academic Year  </center></th>
                                                     <th><center>Department     </center></th>
                                                     <th><center>Document Type  </center></th>
                                                     <th><center>Date of Post   </center></th>
                                                     <th><center>Due Date       </center></th>
                                                     <th><center>Action         </center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");

                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_send_document WHERE is_archive = 1 ORDER BY document_sent_date DESC";
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
                                                    <a href="my_modal" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#recover<?= $row['control_id']; ?>"><i class="bi bi-folder-symlink-fill"></i></a>
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
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                    <!-- Vertically centered Modal -->
              <div class="modal fade" id="recover<?= $row['control_id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Recover the Files</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <p><strong>Are you sure to Recover this Record?</strong></p>
                    <div class="modal-body" id="modal_content">
                    <form method="post" action="config/recover_document_sent.php">
                    <input type="hidden" name="control_id" value="<?php echo $row['control_id']; ?>">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                      <button type="submit"   class="btn btn-primary"  name="recover" value="recover">Yes</button>
                    </div>
                   </form>
                  </div>
                </div>
              </div>

                                                   
                                                    
                                                            
                                                    <?php 
                                                    
                                                } ?>
                                            </tbody>
                                        </table> 
                                   </div>  
                                   </div>    
                                   </div>
                                                </div>








</div>
    </main>
  </body>
</html>


    
    </script>
     <?php include 'includes/footer.php' ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>