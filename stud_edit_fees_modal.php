<?php


include_once("connection/connection.php");

$con = connection();

    if (isset($_GET['number_of_studentFees'])) { 
        $id = $_GET['number_of_studentFees'];
    }
    if(isset($_POST['update'])) {
        $id = isset($_POST['number_of_studentFees']) ? $_POST['number_of_studentFees'] : null;
        $course = $_POST['course'] ?? null;
        $year_level = $_POST['year_level'] ?? null;
        $amount = $_POST['amount'] ?? null;
        $particular = $_POST['particular'] ?? null;
        $details = $_POST['details'] ?? null;
    
        $sql = "UPDATE pms_student_fees SET course = ?, year_level = ?, amount = ?, particular = ?, details = ? WHERE number_of_studentFees = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('ssissi', $course, $year_level, $amount, $particular, $details, $id);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            $_SESSION['status'] = "Updated Successfully";

            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            $_SESSION['status'] = "Failed to update";
        }
        $stmt->close();
    }
    $ql = "SELECT * FROM pms_student_fees ORDER BY number_of_studentFees DESC";
    $pay = $con->query($ql) or die($con->error);
    while ($row = $pay->fetch_assoc()) {
?>

                        <!-- Modal edit -->
                        <div class="modal fade" id="editfee<?php echo $row['number_of_studentFees'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Fee</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                              
                                <form action="" method="POST">
                                    <div class="col-md-6">
                                    <label class="form-label">Course: </label>
                                    <input type="text" id="course" name="course" class="form-control" placeholder="" aria-label="" value="<?php echo $row["course"];?>">
                                    </div>
                                    <div class="col-md-6">
                                    <label class="form-label">Year_level: </label>
                                    <input type="text" id="year_level" name="year_level" class="form-control" placeholder="" aria-label="" value="<?php echo $row["year_level"];?>">
                                    </div>
                                    <div class="col-md-6">
                                    <label class="form-label">Amount: </label>
                                    <input type="text" id="amount" name="amount" class="form-control" placeholder="" aria-label="" value="<?php echo $row["amount"];?>">
                                    </div>
                                    <div class="col-md-6">
                                    <label class="form-label">Particular: </label>
                                    <input type="text" id="particular" name="particular" class="form-control" placeholder="" aria-label="" value="<?php echo $row["particular"];?>">
                                    </div>
                                    <div class="col-md-12">
                                    <label class="form-label">Details: </label>
                                    <textarea id="details" name="details" class="form-control" placeholder="" aria-label=""><?php echo $row["details"];?></textarea>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" name="update" style="background-color:#07179a;" class="btn btn-success btn-sm">
                                <i class="fa fa-save"></i> Update</button>
                                <input type="hidden" name="number_of_studentFees" value="<?php echo $row["number_of_studentFees"];?>">
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>
                            <?php }?>
