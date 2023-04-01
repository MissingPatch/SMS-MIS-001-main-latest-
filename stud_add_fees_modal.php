<?php 
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['add'])){
  
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $amount = $_POST['amount'];
    $particular = $_POST['particular'];
    $details = $_POST['details'];

    $sql = "INSERT INTO `pms_student_fees` (`course`,`year_level`,`amount`,`particular`,`details`) 
    VALUES ('$course', '$year_level', '$amount', '$particular', '$details')";

    if ($con->query($sql) === TRUE) {
        
        $_SESSION['status'] = "Add Fee Successfully";
        echo "<meta http-equiv='refresh' content='0'>";
    }
}


?>

                        <!-- Modal edit -->
                        <div class="modal fade" id="addfee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Fee</h5>
                               
                            </div>
                            

                            <div class="modal-body">
                            <div class="row g-3">


                                <form action"" method="POST">
                                <div class="col-md-6">
									<label class="form-label">Course: </label>
									<input type="text" id="course" name="course" class="form-control" placeholder="" aria-label="" required>
								</div>


                                <div class="col-md-6">
									<label class="form-label">Year_level: </label>
									<input type="text" id="year_level" name="year_level" class="form-control" placeholder="" aria-label="" required>
								</div>

                                <div class="col-md-6">
									<label class="form-label">Amount: </label>
									<input type="text" id="amount" name="amount" class="form-control" placeholder="" aria-label="" required>
                                </div>

								<div class="col-md-6">
									<label class="form-label">Particular: </label>
									<input type="text" id="particular" name="particular" class="form-control" placeholder="" aria-label="" required>
								</div>

                                <div class="col-md-12">
									<label class="form-label">Details: </label>
									<textarea id="details" name="details" class="form-control" placeholder="" aria-label=""></textarea>
								</div>

                                </div>
                                <br>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" name="add" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
                            </div>
                            </div>
                            </div>
                            </form>
                        </div>
                        </div>
