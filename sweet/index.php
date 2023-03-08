<?php 

session_start();
include ("accesslevelsuperadmin.php");
include ("includes/header.php");
include_once("connection/connection.php");
$con = connection();
 ?>
  
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign in</h1>
                                        <p>Welcome Please Login</p>
                                      
                                        <?php 
                                        // Display the alert box
                                        if (isset($_GET['error'])) {
                                        echo("Invalid login, please try again");
                                        } ?>   

                                    </div>
                                    <form class="user" action="accesslevelsuperadmin.php" method="POST">
                                
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Username" name="username" id="username" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                 placeholder="Password" name="password" id="password" 
                                                 required>
                                             
                                        </div>
                                       
                                        
                                        <button type="submit" name="LOGIN" id="LOGIN" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                       
                                    </form>
                                    
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