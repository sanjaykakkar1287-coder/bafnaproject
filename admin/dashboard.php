<?php

session_start();
require_once '../db/config.php'; // Include database connection

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header("Location: ../"); // Login page
    exit;
}
include '../admin/passwordmodal.php';
// Logged-in user information
$username = $_SESSION['username'];

// Fetch enquiries from the database
$enquiries = [];
$sql = "SELECT id, name, company, email, phone, country, requirement, message, created_at FROM enquiries ORDER BY created_at DESC";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bafna</title>
    <!-- Main Dashboard Styles -->
    <link rel="stylesheet" href="../static/css/admincss/dashboard.css">
    <!-- Styles for the Change Password Modal -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2><?php echo $_SESSION['username']; ?></h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#" class="cpassword"><i class="fas fa-cog"></i> Change Password</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="dashboard-header">
                <h1>Contact Form Enquiries</h1>
                <div class="header-actions">


                    <button class="btn btn-primary btn-export-csv"><i class="fas fa-file-download "></i> Export CSV</button>
                </div>
            </header>

            <section class="data-table-section">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="min-width: 60px;">Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Requirement</th>
                                <th>Message</th>
                                <th style="min-width: 160px;">Received On</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td data-label="ID"><?php echo htmlspecialchars($row['id']); ?></td>
                                        <td data-label="Name"><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td data-label="Company"><?php echo htmlspecialchars($row['company']); ?></td>
                                        <td data-label="Email"><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td data-label="Phone"><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td data-label="Country"><?php echo htmlspecialchars($row['country']); ?></td>
                                        <td data-label="Requirement"><?php echo htmlspecialchars($row['requirement']); ?></td>
                                        <td data-label="Message" class="message-cell" data-id="<?php echo $row['id']; ?>" title="Double-click to read full message">
                                            <?php
                                                $message = $row['message'];
                                                $maxLength = 20; // Set the character limit for the preview
                                                if (strlen($message) > $maxLength) {
                                                    // Truncate the message and add an ellipsis
                                                    echo htmlspecialchars(substr($message, 0, $maxLength)) . '...';
                                                } else {
                                                    echo htmlspecialchars($message);
                                                }
                                            ?>
                                        </td>
                                        <td data-label="Received On"><?php echo date('M d, Y h:i A', strtotime($row['created_at'])); ?></td>
                                        <td data-label="Actions">
                                            
                                            <button class="btn-action btn-delete" title="Delete Enquiry"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="10" style="text-align: center; padding: 40px;">No enquiries found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>



    <!-- Include jQuery and SweetAlert before your custom scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../static/adminjs/delete.js"></script>
    <script src="../static/adminjs/export.js"></script>
    <script src="../static/adminjs/message.js"></script>

</body>

</html>