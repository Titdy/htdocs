<?php 

function emptyInputSignUp($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else{
        $result = false;
    }
return $result;
}
#checks if inputs in Registration form are empty or not 
function invalidUid($username){
    $result;
    if (!preg_match("/⌃[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else{
        $result = false;
    }
return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
return $result;
}

function ipwdMatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
return $result;
}
#checks if entered passwords match
function uidExists($conn, $email, $username){

    $sql = "SELECT * FROM account_reg WHERE email = ? OR ID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtFailed");
        exit();//stops script
    }
    mysqli_stmt_bind_param($stmt, "ss", $email, $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
#checks if username already exists in database (account for web not for shooting course)

/*function createUser($conn, $name, $email, $username, $pwd){
    // Sanitize user input
    $sanitizedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $sanitizedUsername = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    $sanitizedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    
    // Rest of your code
    $sql = "INSERT INTO account_reg (email, userName, userPwd, userNameRealName) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtFailed");
        exit();//stops script
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $sanitizedEmail, $sanitizedUsername, $hashedPwd, $sanitizedName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
}*/
//
function createUser($conn, $name, $email, $username, $pwd){
    // Sanitize user input
    $sanitizedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $sanitizedUsername = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    $sanitizedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    
    // Rest of your code
    $sql = "INSERT INTO account_reg (email, userName, userPwd, userNameRealName, userRole) VALUES (?, ?, ?, ?, 'user');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtFailed");
        exit();//stops script
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $sanitizedEmail, $sanitizedUsername, $hashedPwd, $sanitizedName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
}


function createCourseReview($conn, $userCourseReviewName, $userCourseReview){

    $sql = "INSERT INTO course_reviews (username, review_text) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtFailed");
        exit();//stops script
    }
    mysqli_stmt_bind_param($stmt, "ss", $userCourseReviewName, $userCourseReview);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location ../kurz.php?error=none");
}
// creates user whos interested in our course
function createUserForCourse($conn, $userFullName, $userEmail, $userPhone, $userAddress, $userCity, $userCourseType){
    // Sanitize user input
    $sanitizedFullName = htmlspecialchars($userFullName, ENT_QUOTES, 'UTF-8');
    $sanitizedEmail = htmlspecialchars($userEmail, ENT_QUOTES, 'UTF-8');
    $sanitizedPhone = htmlspecialchars($userPhone, ENT_QUOTES, 'UTF-8');
    $sanitizedAddress = htmlspecialchars($userAddress, ENT_QUOTES, 'UTF-8');
    $sanitizedCity = htmlspecialchars($userCity, ENT_QUOTES, 'UTF-8');
    $sanitizedCourseType = htmlspecialchars($userCourseType, ENT_QUOTES, 'UTF-8');

    $sql = "INSERT INTO course_reg (courseUserName, courseUserEmail, courseUserPhone, courseUserAddress, courseUserCity, courseUserCourse) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signUp.php?error=stmtFailed");
        exit();//stops script
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $sanitizedFullName, $sanitizedEmail, $sanitizedPhone, $sanitizedAddress, $sanitizedCity, $sanitizedCourseType);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../kurz.php?error=none");
}

#Creates user for shooting course

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
return $result;
}
#checks if inputs are empty in Login form


function loginUser($conn, $email, $pwd){
    // Sanitize user input
    $sanitizedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    $uidExists = uidExists($conn, $sanitizedEmail, $sanitizedEmail);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["usersid"] = $uidExists["ID"];
        $_SESSION["useruid"] = $uidExists["userNameRealName"];

        // Check the user's role from the database
        $userRole = $uidExists["userRole"];

        return $userRole;
    }
}





















































/*function loginUser($conn, $email, $pwd){
    $uidExists = uidExists($conn, $email, $email);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["usersid"] = $uidExists["ID"];
        $_SESSION["useruid"] = $uidExists["userNameRealName"]; 
        header("location ../index.php");
        exit();
    }
}

/*function loginUser($conn, $email, $pwd){
    // Sanitize user input
    $sanitizedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    $uidExists = uidExists($conn, $sanitizedEmail, $sanitizedEmail);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["usersid"] = $uidExists["ID"];
        $_SESSION["useruid"] = $uidExists["userNameRealName"];

        // Check if the user is an admin
        if ($uidExists["userRole"] === "admin") {
            header("location: ../admin.php"); // Redirect to admin.php
            exit(); // Add this exit statement
        } else {
            header("location: ../profile.php"); // Redirect to profile.php
            exit(); // Add this exit statement
        }
    }
}*/




#Logs in user
#double $username in $uidExists() because it's working with uidExists() method where it's 
#checking with mySql code ID or email so it either takes email or username, not both at the same time

# The mysqli_stmt_bind_param() function is used to bind variables to the parameter markers of a prepared statement.
# The mysqli_stmt_execute() function accepts a prepared statement object (created using the prepare() function) as a parameter, and executes it.
# mysqli_stmt_close returns a boolean value which is true on success and false on failure