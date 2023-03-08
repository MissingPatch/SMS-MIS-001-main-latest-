<?php
$connect = mysqli_connect("localhost", "root", "", "mis_database");
$sql = "SELECT * FROM mis_concern";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>MIS-Files</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center"> DATA </h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>Fetch ID</th>  
                         <th>Response</th>
                         <th>Fetch Data</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["id"].'</td>  
         <td>'.$row["queries"].'</td>  
         <td>'.$row["replies"].'</td>   
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
