<?php 
// Load the database configuration file 
include_once 'MY-CSV/dbConfig.php'; 
 
$filename = "enrollment" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 

// Set column headers 
$fields = array('number_of_new_student', 'student_id', 'particular', 'paid_amount', 'n_t_date', 'n_t_time', 'payment_status', 'cashier'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM pms_new_student ORDER BY student_id");
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['number_of_new_student'], $row['student_id'], $row['particular'], $row['paid_amount'], $row['n_t_date'], $row['n_t_time'], $row['payment_status'], $row['cashier']); 
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