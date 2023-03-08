
<!-- Modal -->


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Student</h5>
        </button>
      </div>
      <div class="modal-body">
        </button></div>

<!-- Content -->


<div class="container">
		<form action="stud_addstudent.php" 
		      method="post">
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

		   <div class="form-group">
		     <label for="student_num">Student ID</label>
		     <input type="student_num" 
		           class="form-control" 
		           id="student_num" 
		           name="student_num" 
		           value="<?php if(isset($_GET['student_num']))
		                           echo($_GET['student_num']); ?>" 
		           placeholder="Enter Student ID">
		   </div>

		   <div class="form-group">
		     <label for="fname">First Name</label>
		     <input style="height: 100px" type="fname" 
		           class="form-control" 
		           id="fname" 
		           name="fname" 
		           value="<?php if(isset($_GET['fname']))
		                           echo($_GET['fname']); ?>"
		           placeholder="Enter First Name" required>
		   </div>

		   <div class="form-group">
		     <label for="lname">Last Name</label>
		     <input style="height: 100px" type="lname" 
		           class="form-control" 
		           id="lname" 
		           name="lname" 
		           value="<?php if(isset($_GET['lname']))
		                           echo($_GET['lname']); ?>"
		           placeholder="Enter Last Name" required>
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


