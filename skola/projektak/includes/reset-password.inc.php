<?php

if (isset($_POST["reset-password-submit"])) {
    
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($password) || empty($passwordRepeat)) {
        header("Location: ../signUp.php?newpwd=empty");
        exit();
    }else if($password != $passwordRepeat){
        header("Location: ../signUp.php?newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");

    require 'dbh.inc.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Stala se chyba";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt, $currentDate); //mozna potreba si pohrat s currenDAte, chybne zapsano

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "Musite znova potvridt svuj pozadavek na resetovani hesla";
            exit();
        }else{
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if ($tokenCheck === false) {
                echo "Musite znova potvridt svuj pozadavek na resetovani hesla";
                exit();
            }elseif ($tokenCheck === true){
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM account_reg WHERE email=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "Stala se chyba";
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "Vyskytl se error";
                        exit();
                    }else{

                        $sql = "UPDATE account_reg SET userPwd=? WHERE email=?";
                        $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "Stala se chyba";
                    exit();
                }
                else{
                    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "Vyskytl se Error";
                        exit(); 
                    }else{
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signUp.php?newpwd=passwordupdated");                    }


                    }
                    }
                }
            }
        }
    }

}
else{
    header("Location: ../index.php");
}