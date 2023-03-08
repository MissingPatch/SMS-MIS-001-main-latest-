<?php

session_start();
include("editaccdepmodal.php");
include("addaccdepmodal.php");
include("connection/connection.php");
include("includes/header.php");
include("includes/navbar.php"); 

$con = connection();   
$id = $_GET['ID'];
$sql = "SELECT * FROM loginform WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();

?>      
	<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="Pictures/usericon.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $row['fname'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['department'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['role'];?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
            
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary"></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['fname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile Number:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['mobilenum'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['role'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Address'];?>
                    </div>
                  </div>
              
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    <a type="submit" name="submit" class="btn btn-success"><i class="fas fa-edit" data-toggle="modal" data-target="#editaccdep" 
                    > EDIT
                    </i></a>   
                    <input type="hidden" name="ID" value="<?php echo $row["ID"];?>">  
                    
                    
                    </form>
                    </div>
                  </div>
                 
                </div>
              </div>

               <!-- / Activity -->
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Activity Logs</h6>
                      <div class="tab-content">
                        

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-comment"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-heart"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta changed order status from <span class="label label-warning">On Hold</span> to <span class="label label-danger">Disabled</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                            Gemerken Zapanta  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
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
    
    <?php   

include ("includes/script.php");
include ("includes/footer.php");

?>