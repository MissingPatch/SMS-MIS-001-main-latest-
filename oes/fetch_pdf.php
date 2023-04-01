<?php
include_once("connection/connect.php");
$conn = index();

// Retrieve the application ID from the query parameter
$id = $_GET['id'];

// Sanitize the ID parameter to prevent SQL injection attacks
$id = $conn->real_escape_string($id);

// Write a SQL query to retrieve the PDF file for the specified application ID
$sql = "SELECT enrollment_pdf FROM oes_student_application WHERE id = $id";

// Execute the SQL query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the PDF file data from the result set
    $row = $result->fetch_assoc();
    $pdf_data = base64_decode($row['enrollment_pdf']);

    // Set the appropriate headers
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="file.pdf"');

    // Output the PDF file data
    echo $pdf_data;
} else {
    echo 'PDF file not found';
}
?>
