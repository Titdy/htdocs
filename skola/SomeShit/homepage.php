<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">      
  </head>
  <body>
    <ul>
      <li><a href="homepage.php?page=fitko">Fitko</a></li>
      <li><a href="homepage.php?page=gladiator">Gladiator</a></li>
      <li></li><a href="homepage.php?page=badminton">Badminton</a></li>
      <input type="text" name="hledat" placeholder="Vyhledat..." class="searchText">
    </ul>
    <br><br>
    <form method="POST">
    Jméno:<input type="text" name="jmeno"  placeholder="Vaše jméno:">
    <br><br>
    <div>Nová zpráva:</div><textarea rows="4" cols="50" name="koment" placeholder="Dneska jsem...">
    </textarea>
    <br>
    <input type="submit" name="odeslat">
  </form>
<?php 

if(isset($_POST['odeslat'])){
    $name = $_POST['jmeno'];
    $comment = $_POST['koment'];

    $mysqli = new mysqli("localhost", "root", "", "wea_test");
    if(isset($mysqli -> connect_error)){
        die("Nepřipojeno k databázi " . mysqli_connect_error());
    }else{
        echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO fitko (jmeno,komentar) VALUES ('$name','$comment')";
    $result = $mysqli->query($sql);
    if($result === true){
        echo "<b><em>podarilo se pridat item</em></b>";
    }
}    
$page = $_GET["page"];
echo "<h1> Nachazite se na strance " . $_GET["page"] . "</h1>";

$datum = date('1 d.m.Y');
$cas = date('H:i:s');

echo $datum . ": uživatel:" . $name . ": " . $comment . " odesláno v: " . $cas;
?>
</body>
</html>