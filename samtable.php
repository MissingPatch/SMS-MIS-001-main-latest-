<?php
if(!isset($_SESSION)){
    session_start();
}

include_once("connection/connection.php");
include ("export.php");
include ("include/header.php");
include ("include/sidebar.php");

$con = connection();


$sql = "SELECT * FROM loginform ORDER BY ID asc";  
$result = mysqli_query($con, $sql);
?>





  <div class="container-fluid">  
   <div class="table-responsive">  
    <h2> Export MySQL data to Excel in PHP</h2><br /> 

    <form action="" method="post" >
     <input type="submit" name="export" class="btn btn-success" value="export" />
    

    <table class="table table-bordered">
                    <tr>  
                    <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>FullName</th>
                            <th>Mobile #</th>
                    </tr>

     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        
        echo 
         ' 
        <tr>  
        <td>'.$row["ID"].' </td>
        <td>'.$row["email"].'</td>
        <td>'.$row["user"].'</td>
        <td>'.$row["pass"].'</td>
        <td>'.$row["fname"].'</td>
     
        </tr>  
         '
         ;  
        
     }

     ?>
    </table>
    <br />
   
   </div>  
  </div>  
  </form>
  <?php
include ("script/script.php");
?>
