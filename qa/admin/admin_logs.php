<?php
  session_start();
  include("../includes/database.php");
  header("Refresh: 5");
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
                                    <li><span class="bread-blod">User Logs</span>
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
                                                     <th>Control ID</th>
                                                     <th>Activity</th>
                                                     <th>time</th>
                                                     <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                 include("../includes/database.php");
                                                 $sql = "SELECT * FROM qa_activity_log ORDER BY activity DESC";
                                                 $result = $conn->query($sql);
                                                 $id = uniqid()
                                                  
                                            ?>
                                            <?php
                                                if ($result->num_rows > 0) {
                                                    // Output the activity log data
                                                    while($row = $result->fetch_assoc()) {
                                            ?>
						                                <tr>
                                                        <td><?php echo $fetch["id"]; ?></td>
                                                        <td><?php echo $fetch["user_id"]; ?></td>
                                                        <td><?php echo $fetch["activity"]; ?></td>
                                                        <td><?php echo $fetch["timestamp"]; ?></td>
							                            
						                                </tr>
                                                <?php           
                                                }
                                                }
                                                else 
                                                {
                                                    echo "No Record Found";
                                                }
                                                ?>
                                             
                                         
                                            </tbody>
                                        </table> 
                                   </div>  
                                   </div>  
                                   
                    </div>
    
    
        
 
                  
        
                                            </div>




        <?php include 'includes/footer.php' ?>

        
    </main>
  </body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>