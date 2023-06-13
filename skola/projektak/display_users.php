<?php
session_start();
if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin') {
    // Fetch all the enrolled users from the "course_reg" table
    $sql = "SELECT * FROM course_reg";
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">';
        //html table code here
        echo '</thead>';

        // Loop through each row and display the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            //html table code here           
            echo '</tr>';
        }
    } else {
        echo '<div class="no-users-message">No users enrolled in the course.</div>';
    }
    // Free the result set
    mysqli_free_result($result);
} else {
    echo 'You do not have permission to access this page.';
}
?>
