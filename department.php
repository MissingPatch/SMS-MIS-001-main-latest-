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
include ("accesslevelsuperadmin.php");
include ("include/header.php");
include ("include/sidebar.php");
include ("department_modal.php");
?>

                    <div class="container-fluid">
                    <div class="main-body">
                    <!-- Content Row -->
                    <div class="row">
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">


                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      
                      <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-1">
                    <p class="p mb-0 text-primary " style=" font-size: 18px; margin-top: 30px;">User Management
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department - Sub System</p>
                    <p class="p mb-0 " style=" font-size: 18px; margin-top: 25px;">
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
                    
                    <div class="col-xl-12 col-md-6 mb-1">
                    <div class="card border-left-primary">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
               
                    <div class="container">
                    <div class="row">
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Quality Assurance</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    

                    <div class="col">
                    
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>
                    </div>
                    <span class="text-truncate"><b>Enrollment</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>
                    </div>
                    <span class="text-truncate"><b>Registrar</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <hr>
                    <br>
                    

                    <div class="row">
                    <div class="col">
                      <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Faculty Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Payment Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Learning Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                     </div>
                    </div>
                    <br>
                    <hr>

                    <div class="row">
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Student Portal</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Clinic</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Guidance</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    <hr>

                    <div class="row">
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Prefect of Discipline</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Financial Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Crad</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    <hr>

                    <div class="row">
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Property Custodian</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Event Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Logistics Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    <hr>

                    <div class="row">
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Safety and Security</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                  
                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Human Resources</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="d-flex align-items-start">
                    <div class="w-100 text-truncate">
                    <div class="text-muted muted d-flex mb-1 flex-wrap">
                    <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                    <img class="icon " src="images/dep.jpg" alt="Starred course" title="Starred course" width="300" height="50">
                    </span>
                    </span>
                    <br>
                    <br>
                    <br>  
                    </div>
                    <span class="text-truncate"><b>Academic Management</b></span>
                    <br>
                    <br>
                    <br>
                    <span>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-sm" style="color: white;background-color:#e91640;">Access</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>   
              

       </div> 
       </div>
       </div> 
       </div>
       </fieldset>
       </main>
       </div>

       </div>
       </div>
       </div>
       </div>


<?php
include ("script/script.php");
include ("footer.php");
   
?> 