<?php
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
/*session_start();

require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
// Validate the user's credentials and retrieve the user's role from the database
// ...
// Assuming you have fetched the user's role and stored it in a variable called $userRole

// Set the session variables
$_SESSION['loggedIn'] = true;
$_SESSION['userRole'] = $userRole;

// Redirect the user to the appropriate page after successful login
header("Location: admin.php"); // Change 'home.php' to the desired destination page
//exit(); <-- THIS CAUSED THE "TOO MANY REDIRECTS"

// Check if the user is logged in and has the admin role
/*if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin') {
    // Allow access to the admin panel
    // Your admin panel code goes here*/

    // Fetch all the enrolled users from the "course_reg" table
    $sql = "SELECT * FROM course_reg";
    $result = mysqli_query($conn, $sql);
    
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">';
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
    
    
    <?php
    // Fetch user information from the "account_reg" table
    $sql = "SELECT ID, email, userName, userNameRealName, userRole FROM account_reg";
    $result = mysqli_query($conn, $sql);
    
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="container"  style="padding-top: %; padding-bottom: 5%;">';
        echo '<p class="font-weight-bold">Zaregistrovaní uživatelé</p>';
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th>User ID</th>';
        echo '<th>Email</th>';
        echo '<th>Username</th>';
        echo '<th>Real Name</th>';
        echo '<th>Role</th>';
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
    
/*} else {
    // Redirect or display an error message
    header("Location: unauthorized.php");
    exit();
}*/
    

   







// Check if the user is logged in and has the admin role
/*if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin') {
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
    // Redirect or display an error message
    header("Location: admin.php");
    exit();
}*/



//session_start();
/*if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin') {
    echo '<a href="display_users.php">Display Enrolled Users</a>';
    if (is_string($_SESSION['userRole'])) {
        echo $_SESSION['userRole'];
    } else {
        echo 'Invalid user role.';
    }
} else {
    echo 'You do not have permission to access this page.';
    if (is_string($_SESSION['userRole'])) {
        echo $_SESSION['userRole'];
    } else {
        echo 'Invalid user role.';
    }
}*/




































/*session_start();
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');

// Check if the user is logged in and has the admin role
if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin') {
    // Fetch all the enrolled users from the "course_reg" table
    $sql = "SELECT * FROM course_reg";
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">';
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
        echo '<th scope="col">Typ Kurzu </th>';
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
            echo '<td>' . $row['courseUserCourse'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="no-users-message">No users enrolled in the course.</div>';
    }
    // Free the result set
    mysqli_free_result($result);
} else {
    // Redirect or display an error message
    header("Location: ../projektak/admin.php");
    exit();
}*/
include_once 'footer.php';
?>
