<?php  
//export.php  

include_once("connection/connection.php");
$con = connection();
$fileName = "bcpdownload" . date('Ymd') . ".xlsx"; 
$output = '';

if(isset($_POST["export"]))
{
 $sql = "SELECT * FROM mis_usermanagement ORDER BY ID DESC";  
 $result = mysqli_query($con, $sql);

 if(mysqli_num_rows($result) > 0)
 {
  $output = '
   <table class="table" bordered="1">  
                <tr>  
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Name</th>
                <th>Department</th>
</tr>
  ';

  while($row = mysqli_fetch_array($result))
  {
   $output = '
   <tr>  
   <td>'.$row["ID"].' </td>
   <td>'.$row["email"].'</td>
   <td>'.$row["user"].'</td>
   <td>'.$row["pass"].'</td>
   <td>'.$row["fname"].'</td>
   </tr>  
   ';
  }

  $output .= '</table>';
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename='.$fileName);   
  echo $output;
 }
}
?>