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

    input[type=text], select {
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

.recenze {
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
.heading {
  margin-right: 25px;
}

footer{
  background-color: #333;
  bottom: 0;
  width: 100%;
  padding: 20px;
  margin-top: 40px;
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
.phpRecenze {
    margin-top: 25px;
    margin-left: 5%;
    padding: 20px;
    max-width: 400px;
    background-color: #04AA6D;
    border-radius: 5px;
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

<div>

</div>


<div class="recenze">
<form method="POST">
  <div class="nadpis"></div>
    Uživ. Jméno<input type="text" name="jmeno" placeholder="..." required>
<br><br>
<div>Vaše recenze:</div><textarea rows="4" cols="50" name="komentar" placeholder=" ..." maxlength="1999">
</textarea>
<br>
<input type="submit" name="odeslatRecenze" value="odeslat">
</form>
</div>
<br>
<span style="margin-left: 5%;">Recenze na naši E-lekárničku</span>
<?php 
if(isset($_POST['odeslatRecenze'])){
    $name = $_POST['jmeno'];
    $comment = $_POST['komentar'];

    $mysqli = new mysqli("localhost", "root", "", "databazeukol");
    if(isset($mysqli -> connect_error)){
        die("Nepřipojeno k databázi " . mysqli_connect_error());
    }else{
        echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO reviews (username, review) VALUES ('$name', '$comment')";
    $result = $mysqli->query($sql);
    if($result === true){
        echo "<b><em>podarilo se pridat item</em></b>";
    }
} 

//recenze visible
$mysqli = new mysqli("localhost", "root", "", "databazeukol");
if(isset($mysqli -> connect_error)){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "";
}
$sql = "SELECT * FROM reviews";
$res = $mysqli->query($sql);
if($res !== false){
    while($row = $res->fetch_assoc()){
        echo "<div class='phpRecenze'>";
            echo "<span>Uživatel:</span>" . $row["username"] . "<br><br>";
            echo $row["review"] . "<br>";
            //echo "<input type='hidden' name='id' value='".$row["id"]."'>";
            echo "</div>";
    }
}else{
    echo $mysqli->error;
}

?>

  <footer>
    <div class="botka">
    <span>Ověrěno:</span>
    <ul>
      <li>Experty</li>
      <li>Zákazníky</li>
      <li>Radou Českých Nemocnic</li>
      <br>
<span class="heading">Hodnoceno:</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

    </ul>

    <span style="float: right; padding-right: 5%; display: inline;"><i class="fa fa-phone"></i> 702 601 434</span>
    </div>
  </footer>
</body>
</html>