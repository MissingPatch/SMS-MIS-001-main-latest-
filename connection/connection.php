<?php 
    if(!isset($_SESSION)){
		session_start();
	}
	function connection(){

$host="localhost";
$user="root";
$password="";
$db="mis_database_003";  


$con = new mysqli($host, $user, $password, $db);

	If($con->connect_error){
		Echo $con->connect_error;
	} else{

		return $con; 
	}
}
?>
