<?php

session_start();
require_once '../db/config.php'; // Database connection


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    
    header('HTTP/1.1 403 Forbidden');
    exit('Access Denied: You must be logged in to access this resource.');
}


$filename = "bafna-enquiries-" . date('Y-m-d') . ".csv";

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');


$output = fopen('php://output', 'w');


fputcsv($output, [
    'ID',
    'Name',
    'Company',
    'Email',
    'Phone',
    'Country',
    'Requirement',
    'Message',
    'Received At'
]);

// 6. Fetch data from the database
// It's good practice to export all relevant fields.
$sql = "SELECT id, name, company, email, phone, country, requirement, message, created_at FROM enquiries ORDER BY created_at DESC";
$result = $conn->query($sql);

// 7. Loop through the data and write each row to the CSV
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Format the date for better readability in the CSV
        $row['created_at'] = date('Y-m-d H:i:s', strtotime($row['created_at']));
        fputcsv($output, $row);
    }
}


fclose($output);
$conn->close();


exit();

?>