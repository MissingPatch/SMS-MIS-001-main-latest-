<?php  

if(isset($_GET['id'])){
   include "../mobile_conn.php";
   include "../connection/connection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM mis_concern
	        WHERE id=$id";
   $result = mysqli_query($con, $sql);
   if ($result) {
   	  header("Location: ../concern.php?success=successfully deleted");
   }else {
      header("Location: ../concern.php?error=unknown error occurred&$user_data");
   }
}