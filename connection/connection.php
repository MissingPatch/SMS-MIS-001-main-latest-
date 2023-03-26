<?php 
    if(!isset($_SESSION)){
		session_start();
	}
	function connection(){

$host="217.21.88.1";
$user="u476821515_SMS";
$password="Bcpsms12@";
$db="u476821515_SMS";  


$con = new mysqli($host, $user, $password, $db);

	If($con->connect_error){
		Echo $con->connect_error;
	} else{

		return $con; 
	}
}
?>
