<?php


include_once("mobile_conn.php");
include "mobileadmin/read.php";
include "mobileadmin/update.php";
include "mobileadmin/create.php";


?>


<!-- Modal -->


<div class="modal fade" id="inq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Add Concerns</b></h5>
        <hr>   
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>

<!-- Content -->


<div class="container">
		<form action="mobileadmin/create.php" 
		      method="post">
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

		   <div class="form-group">
		     <label for="id">Fetch ID</label>
		     <input type="id" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?php if(isset($_GET['id']))
		                           echo($_GET['id']); ?>" 
		           placeholder="Enter id" required>
		   </div>

		   <div class="form-group">
		     <label for="queries">Command</label>
		     <textarea style="height: 100px" type="queries" 
		           class="form-control" 
		           id="queries" 
		           name="queries" 
		           value="<?php if(isset($_GET['queries']))
		                           echo($_GET['queries']); ?>"
		           placeholder="Enter queries" required></textarea>
		   </div>

		   <div class="form-group">
		     <label for="replies">Response</label>
		     <textarea style="height: 100px" type="replies" 
		           class="form-control" 
		           id="replies" 
		           name="replies" 
		           value="<?php if(isset($_GET['replies']))
		                           echo($_GET['replies']); ?>"
		           placeholder="Enter replies" required></textarea>
		   </div>

       <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="create" class="btn btn-primary" style="background-color:#07177a;">Add Data</button>  

	</form>
	</div>
 </div>
 </div>
 </div>
</div>
