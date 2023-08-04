<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';
// Check if the user ID parameter is present
if (isset($_POST['userID'])) {
    // Get the user ID from the request
    $userID = $_POST['userID'];

    // Prepare the SQL statement to delete the user
    $sql = "DELETE FROM account_reg WHERE ID = $userID";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Deletion successful
        echo "User deleted successfully.";
    } else {
        // Error occurred during deletion
        echo "Error deleting user: " . mysqli_error($conn);
    }
}
?>
