<html>
<head>

<style>
.error{
    color: red;
    font-size: 15px;
}
</style>

</head>
<body>
<?php
//variables   - tady tim dole reknes ze ty hodnoty jsou default prazdny
$jmeno = $prijmeni = $email = $pohlavi = "";
$jemnoError = $prijmeniError = $emailError = $pohlaviError = "";


//tady se rekne ze hey, pokud je jmeno prazdny, tak rekni ze je jmeno pozadovano, a 
// pokud tam je, tak mi ho vypis
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["jmeno"])){
        $jmenoError = "Jméno je požadováno";
    } else {
        $jmeno = test_input($_POST["jmeno"]);
        //omezi jmeno pouze na pismena a volne mezery
        if (!preg_match("/^[a-zA-Z-' ]*$/",$jmeno)) {
            $jemnoError = "Only letters and white space allowed";
          }
    }
}
if (empty($_POST["prijmeni"])){
    $prijmeniError = "Příjmení je požadováno";
}else{
    $prijmeni = test_input($_POST["prijmeni"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prijmeni)) {
        $prijmeniError = "Only letters and white space allowed";
      }
}


if (empty($_POST["email"])) {
    $emailError = "Email je požadován";
   } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
}
if (empty($_POST["pohlavi"])) {
    $pohlaviError = "Pohlavi je pozadovano";
  } else {
    $pohlavi = test_input($_POST["pohlavi"]);
  }

  //functions
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

//if (!preg_match("/^[a-zA-Z-' ]*$/",$jmeno")){
//          $jmenoError = "Pouze pismena a mezery";
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Jméno: <input type="text" name="jmeno">
  <span class="error">* <?php echo $jemnoError;?></span>
  <br><br>
  Příjmení: <input type="text" name="email">
  <span class="error">* <?php echo $prijmeniError;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailError;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $pohlaviError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

  <?php
echo "<h2>Your Input:</h2>";
echo $jmeno;
echo "<br>";
echo $prijmeni;
echo "<br>";
echo $email;
?>
</form>
</body>


