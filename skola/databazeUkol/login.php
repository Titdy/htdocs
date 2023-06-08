<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
  font-family: verdana;
}

    input[type=text], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.login {
    margin: auto;
    width: 70%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body{
  margin: 0;
}
.ulClass {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
  width: 100%;
  top: 0;
}

.botka{
  color: white;
}

footer{
  background-color: #333;
  margin-top: 40px;
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 20px;
}

.liClass {
  float: left;
  border-right:1px solid #bbb;
}
.liClass a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.liClass a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
.pictureHeader{
    height: 40px;
    width: 40px;
}

</style>

</head>
<body>
  <header><img src="redCross.png" class="pictureHeader"><img src="redCross.png" class="pictureHeader" style="float: right;"></header>

  <ul class="ulClass">
    <li class="liClass"><a class="active" href="lekarna.php">E-Lékárnička</a></li>
    <li class="liClass"><a href="recepties.php">Online recepty</a></li>
    <li class="liClass"><a href="reviews.php">Recenze</a></li>
    <li  class="liClass" style="float:right"><a href="login.php">Přihlásit se</a></li>
    <li  class="liClass" style="float:right"><a href="signUp.php">Zaregistrovat se</a></li>
  </ul><br><br><br>

<br>

<div class="login">
    <form method="POST">
      <label for="username">Uživatelské jméno</label><br>
      <input type="text" id="username" name="userLogin"  minlength="6" maxlength="24"  required><br>
  
      <label for="userPassword">Heslo</label><br>
      <input type="password" id="userPassword" name="passwordLogin"  minlength="6" maxlength="24" required><br>
  
      <input type="submit" value="Přihlásit se" name="odeslat">
    </form>
  </div>

  <footer>
    <div class="botka">
    <span>Ověrěno:</span>
    <ul>
      <li>Experty</li>
      <li>Zákazníky</li>
      <li>Radou Českých Nemocnic</li>
    </ul>

    <span style="float: right; padding-right: 5%; display: inline;"><i class="fa fa-phone"></i> 702 601 434</span>
    </div>
  </footer>

  <?php 
  if(isset($_POST['odeslat'])){
    $username = $_POST['userLogin'];
    $password = $_POST['passwordLogin'];

    $mysqli = new mysqli("localhost", "root", "", "databazeukol");
    if(isset($mysqli -> connect_error)){
        die("Nepřipojeno k databázi " . mysqli_connect_error());
    }else{
        echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO loginn (username, passwordd) VALUES ('$username', '$password')";
    $result = $mysqli->query($sql);
    if($result === true){
        echo "<b><em>podarilo se pridat item</em></b>";
    }
} 



  ?>
</body>
</html>