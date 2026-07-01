<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header("Location: ../"); // Login page
    exit;

}

// Logged-in user information
$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bafna</title>
    <link rel="stylesheet" href="../static/css/admincss/dashboard.css">
    <!-- Simple icon library for UI elements -->
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
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="dashboard-header">
                <h1>Contact Form Enquiries</h1>
                <div class="header-actions">
                    <select name="month" id="month-select" class="filter-select">
                        <option value="">Select Month</option>
                        <option value="2023-01">January 2023</option>
                        <option value="2023-02">February 2023</option>
                        <option value="2023-03">March 2023</option>
                    </select>
                    <button class="btn btn-secondary"><i class="fas fa-file-export"></i> Export Month</button>
                    <button class="btn btn-primary"><i class="fas fa-file-download"></i> Export All</button>
                </div>
            </header>

            <section class="data-table-section">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Received On</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy Row 1 -->
                            <tr>
                                <td data-label="ID">101</td>
                                <td data-label="Name">John Doe</td>
                                <td data-label="Email">john.doe@example.com</td>
                                <td data-label="Subject">Product Information Request</td>
                                <td data-label="Received On">2023-03-15 10:30 AM</td>
                                <td data-label="Actions">
                                    <button class="btn-action btn-view"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- Dummy Row 2 -->
                            <tr>
                                <td data-label="ID">102</td>
                                <td data-label="Name">Jane Smith</td>
                                <td data-label="Email">jane.smith@example.com</td>
                                <td data-label="Subject">Partnership Opportunity</td>
                                <td data-label="Received On">2023-03-14 05:45 PM</td>
                                <td data-label="Actions">
                                    <button class="btn-action btn-view"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- Dummy Row 3 -->
                            <tr>
                                <td data-label="ID">103</td>
                                <td data-label="Name">Samuel Green</td>
                                <td data-label="Email">sam.green@example.com</td>
                                <td data-label="Subject">Feedback on Website</td>
                                <td data-label="Received On">2023-03-12 09:00 AM</td>
                                <td data-label="Actions">
                                    <button class="btn-action btn-view"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- Add more dummy rows as needed -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- No JS logic as per request, this is a static frontend template -->
</body>
</html>