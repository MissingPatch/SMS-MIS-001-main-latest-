<?php 

if (isset($_GET['id'])) {
	include "../mobile_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM mis_concern WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "./mobile_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$queries = validate($_POST['queries']);
	$replies = validate($_POST['replies']);
	$id = validate($_POST['id']);

	if (empty($queries)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($replies)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {
        

       $sql = "UPDATE mis_concern
               SET id='$id', queries='$queries', replies='$replies'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../update.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}