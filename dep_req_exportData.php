
<?php 

include_once 'MY-CSV/dbConfig.php'; 
 
$filename = "research" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
$f = fopen('php://memory', 'w'); 
 
$fields = array('student_num', 'OR_number', 'name', 'course', 'yearlevel', 'semester', 'payment_type', 'payment_desc', 'status', 'date'); 
fputcsv($f, $fields, $delimiter); 
 
$result = $db->query("SELECT * FROM mis_payment_method WHERE payment_desc IN ('Research') AND status ='Paid' ORDER BY OR_number");
if($result->num_rows > 0){ 

    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['student_num'], $row['OR_number'], $row['name'], $row['course'], $row['yearlevel'], $row['semester'], $row['payment_type'], $row['payment_desc'], $row['status'] , $row['date']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
} 
 
fseek($f, 0); 
 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
 
fpassthru($f); 
 
exit();