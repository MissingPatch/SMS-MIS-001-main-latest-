<?php 
// Load the database configuration file 
include_once 'dbConfig.php'; 
 
$filename = "members_" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 

// Set column headers 
$fields = array('student_num', 'OR_number', 'name', 'course', 'yearlevel', 'semester', 'payment_type', 'payment_desc', 'status', 'date'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM mis_payment_method WHERE payment_desc IN ('Research') AND status ='Paid' ORDER BY OR_number");
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['student_num'], $row['OR_number'], $row['name'], $row['course'], $row['yearlevel'], $row['semester'], $row['payment_type'], $row['payment_desc'], $row['status'] , $row['date']); 
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