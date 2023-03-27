<?php 
// Load the database configuration file 
include_once 'MY-CSV/dbConfig.php'; 
 
$filename = "enrollment" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 

// Set column headers 
$fields = array('id', 'payment_status', 'updated_by'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM oes_student_application WHERE payment_status ='Paid' ORDER BY id");
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['id'], $row['payment_status'], $row['updated_by']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
} 
 
// Move back to beginning of file 
fseek($f, 0); 
 
// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
 
// Output all remaining data on a file pointer 
fpassthru($f); 
 
// Exit from file 
exit();