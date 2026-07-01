<?php

session_start();
require_once "../db/config.php"; 

if (isset($_POST['action']) && $_POST['action'] == 'login') {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users
            WHERE username = ?
            AND status = 'active'
            LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        // Verify Password
        if (password_verify($password, $user['password'])) {

            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];

            echo "success";
            exit;

        } else {

            echo "Invalid Password";
            exit;

        }

    } else {

        echo "User Not Found";
        exit;

    }

}