<?php
/**
 * logout.php
 *
 * Destroys the user session and logs them out.
 */

// Initialize the session
session_start();

// Unset all session variables and destroy the session
$_SESSION = [];
session_destroy();

// Redirect the user to the login page
header("Location: /");
exit;
?>