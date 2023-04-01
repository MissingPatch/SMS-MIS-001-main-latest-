<?php
  session_start();
  include("../includes/database.php");
?>

<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>
<body class="materialdesign">
 <div class="container-fluid">

        <!-- Breadcome start-->
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
                                    <li><a href="pmed_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Monitoring</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->


    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1><i class="fa big-icon fa-eye"></i> Monitoring</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-12">
                                    <table class="table table-striped" style="border-radius: 15px; overflow: hidden;" id="example">
                                            <thead>
                                                <tr>
                                                <th><center>Document ID         </center></th>
                                                <th><center>Academic Year       </center></th>
                                                <th><center>Document Type       </center></th>
                                                <th><center>Department          </center></th>
                                                <th><center>Document Filename   </center></th>
                                                <th><center>Document Sent Date  </center></th>
                                                <th><center>Status              </center></th>
                                                <th><center>Action              </center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               // Connect to MySQL database
                                               include("../includes/database.php");

                                                // Check connection
                                                if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                                }
                                                // Retrieve data from yourtable
                                                $sql = "SELECT * FROM qa_received_document where status = 'Pending' ORDER BY document_sent_date DESC";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <!-- // Display data in table -->
                                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                    <td><?= $row['control_id']; ?></td>
                                                    <td><?= $row['acad_year']; ?></td>
                                                    <td><?= $row['section']; ?></td>
                                                    <td><?= $row['department']; ?></td>
                                                    <td><?= $row['document_name']; ?></td>
                                                    <td><?= $row['document_sent_date']; ?></td>
                                                     <td><?php 
                        	                           if($row['status'] == "Pending"){
						  	                        	echo "<span class='badge rounded-pill  bg-info'>Pending</span> ";
                        	                            }elseif($row['status'] == "Approve"){
						  		                        echo "<span class='badge rounded-pill  bg-primary'>Approve</span>";
                                                    	}
                                                        elseif($row['status'] == "Reject"){
						  		                        echo "<span class='badge rounded-pill  bg-danger'>Reject</span>";
                                                    	}
                        	                            ?></td>
                                                    <td>
                                                    
                                                    <a href="my_modal" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#inactive<?= $row['control_id']; ?>"><i class="bi bi-x-square-fill"></i></a>
                                                    <a href="my_modal" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#active<?= $row['control_id']; ?>"><i class="bi bi-check-circle-fill"></i></a>
                                                    <a href="my_modal" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#view<?= $row['control_id']; ?>"><i class="bi bi-info-circle"></i></a>                     
                                                    </td>

                                                    <!-- Vertically centered Modal -->
                                                     <div class="modal fade" id="active<?= $row['control_id']; ?>" tabindex="-1">
                                                        <div class="modal-dialog">
                                                         <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title">Accept</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                        <p><strong>Are you sure to Accept Document?</strong></p>
                                                        <div class="modal-body" id="modal_content">
                                                        <form method="post" action="config/accept.php">
                                                        <input type="hidden" name="control_id" value="<?php echo $row['control_id']; ?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit"   class="btn btn-primary"  name="accept" value="accept">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                     </div>

                                                     <!-- Vertically centered Modal -->
                                                     <div class="modal fade" id="inactive<?= $row['control_id']; ?>" tabindex="-1">
                                                        <div class="modal-dialog">
                                                         <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title">Reject This Document</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                        <p><strong>Are you sure to Reject This Document?</strong></p>
                                                        <div class="modal-body" id="modal_content">
                                                        <form method="post" action="config/reject.php">
                                                        <input type="hidden" name="control_id" value="<?php echo $row['control_id']; ?>">

                                                        <label for="comment">Reason:</label>
                                                        <textarea id="comment" name="comment" rows="5" cols="40"></textarea>
                                                        <br><br>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit"   class="btn btn-primary"  name="reject" value="reject">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                     </div>
                                                
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
                                                    <p><strong> Academic Year: </strong><?= $row['acad_year'];?></p>
                                                    <p><strong> Department: </strong><?= $row['department'];?></p>
                                                    <p><strong> Document Type: </strong><?= $row['section'];?></p>
                                                    <p><strong> Date Sent: </strong><?= $row['document_sent_date'];?></p>
                                                    <p><strong> Due Date: </strong><?= $row['document_due_date'];?></p>
                                                    <p><strong> Document Name: </strong><?= $row['document_name'];?></p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                     <a href="../admin/config/upload/<?php echo $row['document_name']; ?>"  target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                            
                                                    <?php } ?>
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
    <!-- Static Table End -->
     
    
        
        </div>
      </div>
     
    </main>
    <?php include 'includes/footer.php' ?>