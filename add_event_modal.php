
<!-- Modal -->
<div class="modal fade" id="addannounce" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Announcement</h5>
      </div>
      <div class="modal-body">
                    <div class="card-body">
                        <div class="container-fluid">
                          <?php
                          include("add_event.php");
                          ?>
                            <form action="add_event.php" method="post">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Subject</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Announcement</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="descript" id="descript" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                           
                        </div>
                    </div>
                    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
    
    </div>
  </div>
</div>

