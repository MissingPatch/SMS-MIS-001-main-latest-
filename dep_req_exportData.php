<?php 
// Load the database configuration file 
include_once 'MY-CSV/dbConfig.php'; 
 
$filename = "research" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 

// Set column headers 
$fields = array('OR_number', 'Last_Name', 'First_Name', 'Middle', 'student_id', 'Course', 'year_level', 'particular', 'paid_amount', 'status', 't_date', 't_time', 'section'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM pms_payment WHERE particular IN ('Research') AND status ='Paid' ORDER BY OR_number");
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['OR_number'], $row['Last_Name'], $row['First_Name'], $row['Middle'], $row['student_id'], $row['Course'], $row['year_level'], $row['particular'], $row['paid_amount'] , $row['status'], $row['t_date'], $row['t_time'], $row['section']); 
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