<?php
// Start a new session
session_start();

// Display PHP errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include necessary files
require_once 'dbh.inc.php'; // Database connection
require_once 'functions.inc.php'; // Custom functions

// Check if the login form was submitted
if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    
    // Check for empty input fields
    if (emptyInputLogin($username, $pwd) !== false) {
        header("Location: ../login.php?error=emptyinput");
        exit(); // Stop script execution
    }

    // Attempt to log in the user
    $user = loginUser($conn, $username, $pwd);

    // Check if login was successful
    if ($user) {
        $_SESSION["useremail"] = $user['email']; // Store user email in session

        // Redirect based on user type
        if ($user['email'] === 'admin@admin.cz') {
            header("Location: ../admin.php");
            exit(); // Stop script execution
        } else {
            header("Location: ../profile.php");
            exit(); // Stop script execution
        }
    } else {
        header("Location: ../login.php?error=wronglogin");
        exit(); // Stop script execution
    }
} else {
    // Redirect if the login form was not submitted
    header("Location: ../login.php");
    exit(); // Stop script execution
}
?>
