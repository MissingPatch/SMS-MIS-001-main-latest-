<?php
if(!isset($_SESSION)){
    session_start();
}

include ("connection/connection.php");
include ("includes/header.php");
include ("includes/navbar.php");

$con = connection();

$sql = "SELECT * FROM stud";
  
    if ($result = mysqli_query($con, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
}



?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                </div>

                
                        
                    
            
       

<?php   
include ("includes/script.php");
include ("includes/footer.php");
?>
   

   
    

