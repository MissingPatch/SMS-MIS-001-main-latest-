<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qa_table";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data for chart
$sql = "SELECT qa_sanction, COUNT(*) as total FROM files WHERE document_date_sent >= '2023-01-01' AND document_date_sent <= '2023-01-31' GROUP BY sanction_department ORDER BY total DESC";
$result = $conn->query($sql);

// Create data arrays for chart
$labels = array();
$data = array();

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['sanction_department'];
    $data[] = $row['total'];
}

// Close connection
$conn->close();
?>
