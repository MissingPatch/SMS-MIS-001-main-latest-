<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['role'])){
  $_SESSION['role'];
}
else{
 echo header("location:login.php");
}

include_once("mobile_conn.php");
include ("connection/connection.php");
include ("include/staffheader.php");
include ("include/staffsidebar.php");


include "mobileadmin/read.php";
include "mobileadmin/update.php";
include "concern_modal.php";
include "concern_update_modal.php";



?>
                <div class="container-fluid">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary" style="margin-left:15px; margin-top: 25px;">Management Inquiries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Concerns </p>
                    <p class="p mb-0 " style=" font-size: 20px; margin-top: 25px;">
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        echo "". date('F j, Y g:i:a  ');
                    ?>
                    </p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                            <div class="card-header py-3"><b>List of Concern</b>
                                <!--<h6 class="m-0 font-weight-bold text-primary">Student Accounts --> 

    </div>

                              
							

        <div class="card-body">
        <div class="table-responsive">

			<?php if (mysqli_num_rows($result)) { ?>
			<table id="example" class="table" style="width:100%">
			  <thead>
			    <tr>
			      <th scope="col">No.</th>
			      <th scope="col">Fetch ID</th>
				  <th scope="col">Command</th>
			      <th scope="col">Response</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
				  <td><?php echo $rows['id']; ?></td>
			      <td><?=$rows['queries']?></td>
				  <td><?php echo $rows['replies']; ?></td>
			      <td>	


				  <a href="#" data-toggle="modal" data-target="#inq1" data-inqnum="<?php echo $row['inq_num']; ?>" aria-labelledby="exampleModalLabel"
			      class="btn btn-success btn-sm" style="background-color:#07177a;" > Edit </a>
				  
				  <a href="mobileadmin/delete.php?id=<?=$rows['id']?>" 
			      class="btn btn-danger btn-sm"> Delete </a>
			      
				  
				</td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
                                               
                                    </div>
                                    </div>    
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                                    include ("script/script.php");
                                    include ("footer.php");
                                    ?>
                                    </div>
                               
                                    </div>
                                  
                                    </div>
                                    </div>


