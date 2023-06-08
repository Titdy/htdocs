<?php 

if (isset($_POST["reset-request-submit"])) {
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/skola/projektak/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);


    $expires = date("U") + 1800; //"U" -> dnesni datum v sekundach od roku 1970

    require 'dbh.inc.php';
    


    /*$userEmail = $_POST["email"];

    if (!empty($_POST['email'])) {

    }*/




















    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Stala se chyba";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Stala se chyba";
        exit();
    }else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;

    $subject = 'Resetujte si heslo:';

    $message = '<p>Prišla nám vaše žádost o změnu hesla pro Váš účet. Odkaz na změnu hesla je dole.
    Pokud jste nežádali změnu hesla, můžete tento email ignorovat</p>';
    $message .= '<p>Tady je Váš odkaz na změnu hesla: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';
    // ".=" znamena pokracovani k ty uplne prvni $message variable

    $headers = "From: localhost <usemmtuts@gmail.com>\r\n";
    $headers .= "Reply-To: usemmtuts@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../reset-password.php?reset=success");


}

else{
    header("Location: ../index.php");
}