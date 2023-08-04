<?php
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>

<div class="sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="adminTerms.php">Terminy</a></li>
        <li class="list-group-item"><a href="adminUsers.php">Uživatelé</a></li>
        <li class="list-group-item"><a href="adminCourse.php">Zájemci o kurz</a></li>
    </ul>
</div>

<?php
// Fetch all the enrolled users from the "course_reg" table
$sql = "SELECT * FROM course_reg";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    echo '<div class="container" style="padding-top: 10%; padding-bottom: 5%;">';
    echo '<p class="font-weight-bold">Zájemci o střelecký kurz</p>';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">ID</th>';
    echo '<th scope="col">Jméno</th>';
    echo '<th scope="col">Email</th>';
    echo '<th scope="col">telefon</th>';
    echo '<th scope="col">Adresa</th>';
    echo '<th scope="col">Město</th>';
    echo '<th scope="col">Akce</th>'; // Added column for action buttons
    echo '</tr>';
    echo '</thead>';

    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['courseUserId'] . '</td>';
        echo '<td>' . $row['courseUserName'] . '</td>';
        echo '<td>' . $row['courseUserEmail'] . '</td>';
        echo '<td>' . $row['courseUserPhone'] . '</td>';
        echo '<td>' . $row['courseUserAddress'] . '</td>';
        echo '<td>' . $row['courseUserCity'] . '</td>';
        echo '<td>';
        echo '<button class="btn btn-danger" onclick="deleteCourseUser(' . $row['courseUserId'] . ')">Vymazat</button>'; // Button to delete the user
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
} else {
    echo '<div class="no-users-message">No users enrolled in the course.</div>';
}

// Free the result set
mysqli_free_result($result);
?>

<script>
function deleteCourseUser(userID) {
    // Prompt the user for confirmation before deleting
    var confirmation = confirm("Are you sure you want to delete this user?");

    if (confirmation) {
        // Send an AJAX request to delete the user
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "includes/deleteCourseUser.inc.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Reload the page to reflect the updated table
                location.reload();
            }
        };
        xhr.send("userID=" + userID);
    }
}
</script>
