<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*header("location: ../profile.php");
if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
    
        header("location: ../login.php?error=emptyinput");
        exit();//stops script
    }

    loginUser($conn, $username, $pwd);
    
}
else{
    header("location: ../login.php");
    exit();
}
*/

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit(); // Stops script execution
    }

    $loginResult = loginUser($conn, $username, $pwd);
    echo $loginResult;
    if ($loginResult === "admin") {
        header("location: ../admin.php"); // Redirect to admin page
        exit();
    } elseif ($loginResult === "user") {
        header("location: ../profile.php"); // Redirect to user profile page
        exit();
    } else {
        header("location: ../login.php?error=wronglogin"); // Redirect to login page with an error message
        exit();
    }
} else {
    header("location: ../login.php");
    exit();
}

