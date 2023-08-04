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
// Fetch user information from the "account_reg" table
$sql = "SELECT ID, email, userName, userNameRealName, userRole FROM account_reg";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    echo '<div class="container" style="padding-top: 10%; padding-bottom: 5%;">';
    echo '<p class="font-weight-bold">Zaregistrovaní uživatelé</p>';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th>User ID</th>';
    echo '<th>Email</th>';
    echo '<th>Username</th>';
    echo '<th>Real Name</th>';
    echo '<th>Role</th>';
    echo '<th>Action</th>'; // Added column for action buttons
    echo '</tr>';
    echo '</thead>';

    // Loop through each row and display the data
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['userName'] . '</td>';
        echo '<td>' . $row['userNameRealName'] . '</td>';
        echo '<td>' . $row['userRole'] . '</td>';
        echo '<td>';
        echo '<button class="btn btn-danger" onclick="deleteUser(' . $row['ID'] . ')">Vymazat</button>'; // Button to delete the user
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';

    echo '</table>';
    echo '</div>';
} else {
    echo '<div class="alert alert-info">No users found.</div>';
}

// Free the result set
mysqli_free_result($result);

include_once 'footer.php';
?>

<script>

function deleteUser(userID) {
  // Prompt the user for confirmation before deleting
  var confirmation = confirm("Are you sure you want to delete this user?");

  if (confirmation) {
    // Send an AJAX request to delete the user
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/deleteUser.inc.php", true);
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