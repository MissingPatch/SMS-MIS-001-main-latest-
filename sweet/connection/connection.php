<?php 
    if(!isset($_SESSION)){
		session_start();
	}
	function connection(){

$host="localhost";
$user="root";
$password="cft6vgy7";
$db="mis1";  


$con = new mysqli($host, $user, $password, $db);


	If($con->connect_error){
		Echo $con->connect_error;
	} else{

		return $con;
	}
}
?>
