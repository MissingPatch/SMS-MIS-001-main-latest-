<?php  

$host="localhost";
$user="u476821515_SMS";
$password="Bcpsms12@";
$db="u476821515_SMS";  

$conn  = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
	echo "Connection failed!";
}
?>