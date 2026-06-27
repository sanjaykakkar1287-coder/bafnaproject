<?php
// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Best practice: Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    // If not, send an error and stop execution
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// In a real-world application, you would do the following:
// 1. **Validate & Sanitize**: Clean all inputs from $_POST (e.g., $_POST['name'], $_POST['email']).
// 2. **Send Email**: Use a library like PHPMailer to send the details to an admin email.
// 3. **Save to Database**: Store the enquiry in a database table.
// 4. **Error Handling**: If any of the above steps fail, return a JSON error.

// For this example, we will just simulate a successful submission.
echo json_encode(['status' => 'success', 'message' => 'Thank you for your enquiry! We will get back to you shortly.']);
?>