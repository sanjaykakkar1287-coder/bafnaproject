<?php
/**
 * changepassword.php
 *
 * Handles the server-side logic for changing a logged-in user's password.
 * - Verifies the user's session.
 * - Validates the current password against the database.
 * - Hashes and updates the new password.
 * - Returns a JSON response for the AJAX call.
 */

session_start();
require_once '../db/config.php'; // Database connection

/**
 * A helper function to send a standardized JSON response and terminate the script.
 *
 * @param string $status 'success' or 'error'.
 * @param string $message The message to be sent.
 */
function send_json_response($status, $message) {
    header('Content-Type: application/json');
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

// 1. Security: Check if the user is logged in.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    send_json_response('error', 'Authentication required. Please log in and try again.');
}

// 2. Security: Check for a valid POST request and action.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['action']) || $_POST['action'] !== 'change_password') {
    send_json_response('error', 'Invalid request method or action.');
}

// 3. Input Validation: Get and sanitize POST data.
$current_password = $_POST['current_password'] ?? '';
$new_password = $_POST['new_password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$username = $_SESSION['username'];

if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
    send_json_response('error', 'All password fields are required.');
}

if ($new_password !== $confirm_password) {
    send_json_response('error', 'The new password and confirmation password do not match.');
}

if (strlen($new_password) < 8) {
    send_json_response('error', 'The new password must be at least 8 characters long.');
}

// 4. Database: Verify the current password.
$sql = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    send_json_response('error', 'User account not found.');
}

$user = $result->fetch_assoc();

// Use password_verify to check if the submitted current password matches the hash in the DB.
if (!password_verify($current_password, $user['password'])) {
    send_json_response('error', 'The current password you entered is incorrect.');
}

// 5. Database: Update to the new password.
// Hash the new password for secure storage.
$new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

$update_sql = "UPDATE users SET password = ? WHERE username = ?";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bind_param("ss", $new_password_hashed, $username);

if ($update_stmt->execute()) {
    send_json_response('success', 'Your password has been updated successfully.');
} else {
    // Log the error for debugging, but show a generic message to the user.
    error_log("Password update failed for user: " . $username . " - " . $update_stmt->error);
    send_json_response('error', 'An unexpected error occurred. Could not update password.');
}

$stmt->close();
$update_stmt->close();
$conn->close();