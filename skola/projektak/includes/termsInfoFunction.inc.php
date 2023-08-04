<?php

if (isset($_POST["submit"])) {
    $termsTitle = $_POST["termsTitle"];
    $termsText = $_POST["termsText"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($termsTitle, $termsText) !== false) {
    
        header("location: ../login.php?error=emptyinput");
        exit();//stops script
    }
    else{
        termsInfo($conn, $termsTitle, $termsText);
    }

}
else{
    header("location: ../kurz.php?error=somethingWentWrong");
    exit();
}
header("location: ../admin.php");