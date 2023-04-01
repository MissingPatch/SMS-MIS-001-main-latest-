
<!-- Modal -->
<div class="modal fade" id="create_rep" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>Submit Report</h5>
      </div>
      <div class="modal-body">
                    <div class="card-body">
                        <div class="container-fluid">
                          <?php
                          include("create_rep_BE.php");
                          ?>
                            <form action="create_rep_BE.php" method="post">
                                <input type="hidden" name="id" value="">

                                <div class="form-group mb-2">
                                <label for="description" class="control-label">Department</label>
                                <select class="form-control" id="department" name="department" required>
                                <option value=""> ... </option>
                                <option value="Enrollment"> Enrollment </option>
                                <option value="Payment Management System"> Payment Management System </option>
                                <option value="Clinic"> Clinic </option>
                                <option value="CRAD"> CRAD </option>
                                </select>
                                </div>
                                <br>
                                
                                <div class="form-group mb-2">
                                <label for="type" class="control-label">Report Status</label>
                                <select class="form-control" id="type" name="type" required>
                                <option value=""> ... </option>
                                <option value="Daily Report"> Daily </option>
                                <option value="Weekly Report"> Weekly </option>
                                <option value="Monthly Report"> Monthly </option>
                                </select>
                                </div>

                                <div class="form-group mb-2">
                                <label for="description" class="control-label">Report</label>
                                <select class="form-control" id="description" name="description" required>
                                <option value=""> ... </option>
                                <option value="Number of enrollees this week.">Enrollment: Number of enrollees this week. </option>
                                <option value="Number of consultation this week."> Clinic: Number of consultation this week.  </option>
                                <option value="Number of paid student in research."> CRAD: Number of paid student in research. </option>
                                </select>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="number" class="control-label"> Number of,</label>
                                    <input type="number" class="form-control form-control-sm rounded-0" name="number" id="number" required>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="other" class="control-label"> Other's </label>
                                    <textarea rows="5" placeholder="Other report's" class="form-control form-control-sm rounded-0" name="other" id="other"></textarea>
                                </div>
<!--
                                <div class="form-group mb-2">
                                <label for="" class="control-label"> Upload Files: </label>
                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                </div>
-->

                                <br>

                                <div class="form-group mb-2">
                                    <label for="feedback" class="control-label">Message</label>
                                    <textarea rows="3" placeholder="Optional" class="form-control form-control-sm rounded-0" name="feedback" id="feedback"></textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="date" class="control-label">Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="date" id="date" required>
                                </div>
                           
                        </div>
                    </div>
                    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Submit</button>
        </form>
      </div>
    
    </div>
  </div>
</div>

