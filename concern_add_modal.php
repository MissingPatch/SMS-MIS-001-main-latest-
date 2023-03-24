
<!-- Modal -->
<div class="modal fade" id="addconcern" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Concern Data</h5>
      </div>
      <div class="modal-body">
                    <div class="card-body">
                        <div class="container-fluid">
                          <?php
                          include("concern_add.php");
                          ?>
                            <form action="concern_add.php" method="post">
                                <input type="hidden" name="id" value="">

                                <div class="form-group mb-2">
                                    <label for="id" class="control-label">ID</label>
                                    <input type="text" placeholder="AUTO GENERATE ID" class="form-control" name="title" id="id" disabled>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="replies" class="control-label">Command</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="Enter new command" name="replies" id="replies" required>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="queries" class="control-label">Response</label>
                                    <textarea rows="5" class="form-control form-control-sm rounded-0" placeholder="Enter new replies" name="queries" id="queries" required></textarea>
                                </div>
                           
                        </div>
                    </div>
                    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Add Concern</button>
        </form>
      </div>
    
    </div>
  </div>
</div>

