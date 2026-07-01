<?php
/**
 * config.php
 *
 * Central configuration and database connection file for the admin area.
 *
 * @version 1.0
 */


// --- DATABASE CONFIGURATION ---
// Replace these placeholder values with your actual database credentials.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');      // Your database username (e.g., 'root')
define('DB_PASSWORD', '');          // Your database password
define('DB_NAME', 'bafna_db'); // The name of your database

// --- ESTABLISH DATABASE CONNECTION (using MySQLi) ---

// Create a new database connection object
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check for and handle connection errors
if ($conn->connect_error) {
    // In a production environment, you should log this error instead of displaying it.
    die("Connection Failed: " . $conn->connect_error);
}

// Set the character set to utf8mb4 for full Unicode support.
$conn->set_charset("utf8mb4");

?>