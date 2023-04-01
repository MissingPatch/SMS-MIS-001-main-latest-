<?php
function index(){
    $host = "localhost";
    $username = "u476821515_SMS";
    $password = 'Bcpsms12@';
    $database = "u476821515_SMS";
  
$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    echo $conn->connect_error;
} 
else{
    return $conn;
}

}

?>