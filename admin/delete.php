<?php
/**
 * delete.php
 *
 * Handles the AJAX request to delete an enquiry from the database.
 * This script is protected and requires a user to be logged in.
 */

session_start();
require_once '../db/config.php'; // Database connection

// --- Security Check: Ensure user is logged in ---
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    http_response_code(403); // Forbidden
    echo "error";
    exit;
}

// --- Request Validation ---
// Check for a POST request with the correct action and a valid ID.
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST['action']) && $_POST['action'] == 'delete_enquiry' &&
    isset($_POST['id']) && is_numeric($_POST['id'])
) {

    $enquiryId = (int)$_POST['id'];

    // --- Database Operation: Use a prepared statement for security ---
    $sql = "DELETE FROM enquiries WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $enquiryId);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            // If execution is successful and at least one row was deleted
            echo "success";
        } else {
            // If the query fails or no rows are affected (e.g., ID not found)
            echo "error";
        }
        $stmt->close();
    } else {
        // If the statement preparation fails
        echo "error";
    }
    $conn->close();
} else {
    // If the request is invalid (not POST, missing action/id)
    http_response_code(400); // Bad Request
    echo "error";
}
?>