<?php

if (isset($_POST["submit"])) {
    $userFullName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userPhone = $_POST["phone"];
    $userAddress = $_POST["address"];
    $userCity = $_POST["city"];
    $userCourseType = $_POST["courseType"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($userFullName, $userEmail, $userPhone, $userAddress, $userCity, $userCourseType) !== false) {
    
        header("location: ../login.php?error=emptyinput");
        exit();//stops script
    }
    else{
        createUserForCourse($conn, $userFullName, $userEmail, $userPhone, $userAddress, $userCity, $userCourseType);
    }

}
else{
    header("location: ../kurz.php?error=somethingWentWrong");
    exit();
}
header("location: ../success.php");