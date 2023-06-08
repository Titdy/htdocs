<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignUp($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    
    header("location: ../signUp.php?error=emptyinput");
    exit();//stops script
}/*
if (invalidUid($username) !== false) {
    header("location: ../signUp.php?error=invalidUid");
    exit();//stops script
}
else if (invalidEmail($email) !== false) {
    header("location: ../signUp.php?error=invalidEmail");
    exit();//stops script
}
else if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signUp.php?error=passwordsDontMatch");
    exit();//stops script
}
else if (uidExists($conn, $username, $email) === true) {
    header("location: ../signUp.php?error=usernameTaken");
    exit();//stops script
}*/
createUser($conn, $name, $email, $username, $pwd);
header("location: ../success.php");

}

else{
    header("location: ../signUp.php");
    exit();//stops script
}
