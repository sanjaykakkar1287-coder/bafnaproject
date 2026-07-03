<?php
/**
 * message.php
 *
 * Handles the AJAX request to fetch the full message for a specific enquiry.
 * Returns the message content in a JSON format.
 */
session_start();
require_once '../db/config.php';

// Helper function for sending JSON responses
function send_json_response($status, $message) {
    header('Content-Type: application/json');
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

// 1. Security Check: Ensure the user is logged in.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    http_response_code(403); // Forbidden
    send_json_response('error', 'Authentication required.');
}

// 2. Input Validation: Check for a valid POST request and ID.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id']) || !is_numeric($_POST['id'])) {
    http_response_code(400); // Bad Request
    send_json_response('error', 'Invalid request.');
}

$id = (int)$_POST['id'];

// 3. Database Operation: Use prepared statements with MySQLi.
$sql = "SELECT message FROM enquiries WHERE id = ?";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    if ($row) {
        send_json_response('success', $row['message']);
    } else {
        send_json_response('error', 'Message not found.');
    }
} else {
    send_json_response('error', 'Database query failed.');
}

$conn->close();