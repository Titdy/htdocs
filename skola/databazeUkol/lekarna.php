<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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

.lekarna {
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
.obrazek{
  width: 400px;
  height: 320px; 
  margin: auto;
}
.uvod{
  padding: 20px;
}

</style>
<body>
<header><img src="redCross.png" class="pictureHeader"><img src="redCross.png" class="pictureHeader" style="float: right;"></header>

<ul class="ulClass">
    <li class="liClass"><a class="active" href="lekarna.php">E-Lékárnička</a></li>
    <li class="liClass"><a href="recepties.php">Online recepty</a></li>
    <li class="liClass"><a href="reviews.php">Recenze</a></li>
    <li  class="liClass" style="float:right"><a href="login.php">Přihlásit se</a></li>
    <li  class="liClass" style="float:right"><a href="signUp.php">Zaregistrovat se</a></li>
  </ul><br><br><br>
<div class="uvod">
  <p>Dostali jste se někdy do situace, kdy potřeba ošetření ran svých či ostatních bylo Vaší hlavní prioritou, 
   avšak lékárničku, či jakoukoliv pomůcku k první pomoci nemáte zrovna při ruce?
   Nebojte, máme Vaše záda. S naší službou E-lékarnička Vám můžeme vaše ruce obklopit Vaší vlastní lékarničkou.

  </p>
</div>
<div class="obrazek">
  <img src="firstAid.jpg" class="obrazek">
</div>

<div class="lekarna">
    <form  method="POST">
      <input type="checkbox" name="nakup[]" value="gaza5x10" id="pol1"><label for="pol1">Gáza 5x 10cm</label><br>
      <input type="checkbox" name="nakup[]" value="gaza5x7" id="pol2"><label for="pol2">Gáza 5x 7,5cm</label><br>
      <input type="checkbox" name="nakup[]" value="gaza5x5" id="pol3"><label for="pol3">Gáza 5x 5cm</label><br>
      <input type="checkbox" name="nakup[]" value="obinadlo" id="pol4"><label for="pol4">Obinadlo sterilní 2krát 10cm x 5m</label><br>
      <input type="checkbox" name="nakup[]" value="dezinfekce" id="pol5"><label for="pol5">Dezinfekce líh 50ml</label><br>
      <input type="checkbox" name="nakup[]" value="sesivani" id="pol6"><label for="pol6">Sada pro sešívání ran (jehly, nitě)</label><br>
      <input type="checkbox" name="nakup[]" value="skrtidlo" id="pol7"><label for="pol7">Škrtidlo</label><br>
      <input type="checkbox" name="nakup[]" value="naplasti" id="pol8"><label for="pol8">Náplasti 5krát 10x10cm</label><br>
      <input type="checkbox" name="nakup[]" value="naplasti" id="pol9"><label for="pol9">Nůžky, Pinzeta technická 13cm</label><br>
      <input type="checkbox" name="nakup[]" value="naplasti" id="pol10"><label for="pol10">Folie proti mrazu 190x120cm</label><br>
      <br>
      <label for="townn">Město</label><br>
      <input type="text" name="town" id="townn" placeholder="..." minlength="3" required>
      <label for="adress">Adresa</label><br>
      <input type="text" name="adress" id="adress" placeholder="..." minlength="3" required>
      
      <input type="submit" value="odeslat" name="odeslat">
    </form>
  </div>
<br><br>

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
if(isset($_POST['odeslat']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word
$db_name="databazeukol";//database name
$tbl_name="orders"; //table name
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['nakup'];  
$chk="";  
$town = $_POST['city'];
$adress = $_POST['adress'];

foreach($checkbox1 as $chk1)  
   {
      $chk .= $chk1.","; 
   }  
$in_ch=mysqli_query($con,"INSERT INTO orders (ordered, town, adress) values ('$chk','$town','$adress')");  
if($in_ch==1)  
   {  
      echo'Pridal se item';  
   }  
else  
   {  
      echo'nepridal se item';  
   }  
} 

// reviews
/*if(isset($_POST['odeslatRecenze'])){
    $name = $_POST['jmeno'];
    $comment = $_POST['komentar'];
    

    $mysqli = new mysqli("localhost", "root", "", "databazeukol");
    if(isset($mysqli -> connect_error)){
        die("Nepřipojeno k databázi " . mysqli_connect_error());
    }else{
        echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO reviews (jmeno,komentar) VALUES ('$name','$comment')";
    $result = $mysqli->query($sql);
    if($result === true){
        echo "<b><em>podarilo se pridat item</em></b>";
    }
}    */

?>
</body>
</html>


