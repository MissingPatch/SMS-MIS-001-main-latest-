<?php
  session_start();
//   header("Refresh: 5");
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
                                    <li><span class="bread-blod">Accomplish Record</span>
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
                                                     <th></th>
                                                     <th><center>Control ID     </center></th>
                                                     <th><center>Academic Year  </center></th>
                                                     <th><center>Department     </center></th>
                                                     <th><center>Date of Post   </center></th>
                                                     <th><center>Action         </center></th>
                                                </tr>
                                            </thead>
                                     
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");

                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_documents ORDER BY date_created DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    <tr>
                                                        
                                                    <td><input type="checkbox" name="select[]" value="' . $row['id'] . '"></td>
                                                    <td><?= $row["id"]; ?></td>
                                                    <td><?= $row["acad_year"]; ?></td>
                                                    <td><?= $row["department"]; ?></td>
                                                    <td><?= $row["date_created"]; ?></td>   
                                                    
                                                    
                                                    <td><center>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['id']; ?>"><i class="bi bi-info-circle"></i></a>
                                                    </center></td>
                                                    


                                                    <!-- // Create modal for each record -->
                                                    <div class="modal fade" id="view<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <h4 class='modal-title'>View Record</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <p><strong> Control ID: </strong><?= $row['id'];?></p>
                                                    <p><strong> Academic Year: </strong><?= $row['acad_year'];?></p>
                                                    <p><strong> To Department: </strong><?= $row['department'];?></p>
                                                    <p><strong> Date Posted: </strong><?= $row['date_created'];?></p>
                                                    <p><strong> Document Name: </strong><?= $row['name'];?></p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <a href="config/upload/<?php echo $row['name']; ?>"  target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
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






        <!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Accomplish File</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="config/save_document.php" method="post" enctype="multipart/form-data">

  <label for="department">Department:</label>
  <select name="department" id="department">
                                                <?php
                                                     include("../includes/database.php");
                                                    $sql = "SELECT * FROM qa_department_type WHERE department_status = 0";
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

  <label for="file">Attachment:</label>
  <input type="file" id="file" name="file">
  <br> <br>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success " name="save">Save changes</button>
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