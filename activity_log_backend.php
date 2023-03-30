<?php

    function log_activity($id, $email, $activity_type) {
        include_once("connection/connection.php");
        $con = connection();
    
        // Get the IP address of the user
        $ip_address = $_SERVER['REMOTE_ADDR'];
    
        // If the IP address is ::1, replace it with 127.0.0.1
        if ($ip_address == '::1') {
            $ip_address = '127.0.0.1';
        }
    
        // Prepare the insert statement with IP address
        $stmt = mysqli_prepare($con, 'INSERT INTO mis_activity_logs (ID, email, activity_type, ip_address) VALUES (?,?,?,?)');
        mysqli_stmt_bind_param($stmt, 'isss', $id, $email, $activity_type, $ip_address);
    
        // Execute the insert statement
        mysqli_stmt_execute($stmt);
    
        // Close the statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }  
?>
