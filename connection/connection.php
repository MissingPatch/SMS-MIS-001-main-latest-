<?php 
    if(!isset($_SESSION)){
		session_start();
	}
	function connection(){
		//Hostinger sql
		//$host="localhost";
		//$user="root";
		//$password="Bcpsms12@";
		//$db="u476821515_SMS";

		//Remote sql
		$host="localhost";
		$user="root";
		$password="";
		$db="u476821515_SMS"; 

		//local sql
		//$host="217.21.88.1";
		//$user="root";
		//$password="";
		//$db="u476821515_SMS"; 


$con = new mysqli($host, $user, $password, $db);

	If($con->connect_error){
		Echo $con->connect_error;
	} else{

		return $con; 
	}
}
?>
