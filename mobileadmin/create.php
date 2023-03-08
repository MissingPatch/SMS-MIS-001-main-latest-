<?php 

if (isset($_POST['create'])) {
	include "mobile_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$queries = validate($_POST['queries']);
	$replies = validate($_POST['replies']);
	/* $password = validate($_POST['role']); */

	$user_data = 'id='.$id. '&queries='.$queries. '&replies='.$replies;
	
	/* $user_data = 'role='.$role; */

	if (empty($id)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}
		$password = md5($password);
       $sql = "INSERT INTO mis_concern(id, queries, replies) 
               VALUES('$id', '$queries', '$replies')";
       $result = mysqli_query($conn, $sql);

	}

	?>
