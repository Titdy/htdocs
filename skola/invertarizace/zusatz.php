<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Artikel hinzufugen</h1>
<a href="vypis.php">Extrakt</a>

 <form method="POST" id="useForm">
Artikelname: <input type="text" name="artikelname"><br>
Artikelpreis: <input type="number" name="artikelpreis"><br>
Kaufdatum: <input type="text" name="kaufdatum"><br>
<input type="submit" name="senden" value="Hinzufugen"><br>



 </form>
 <textarea rows="4" cols="50" name="koment" form="useForm">
        </textarea>
 

<?php 

if(isset($_POST['senden'])){
    $name = $_POST['artikelname'];
    $preis = $_POST['artikelpreis'];
    $datum = $_POST['kaufdatum'];

    $mysqli = new mysqli("localhost", "root", "", "wea_test");
    if(isset($mysqli -> connect_error)){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Podařilo se připojit";
    }
$sql = " ";
if(empty($datum)){
    $sql = "INSERT INTO  inventar (nazev, cena) VALUES ('$name', $preis)";
}else{
    $sql = "INSERT INTO  inventar (nazev, cena, datum) VALUES ('$name', $preis, '$datum')";
}

    $sql = "INSERT INTO  inventar (nazev, cena, datum) VALUES ('$name', $preis, '$datum')";
    $res = $mysqli->query($sql);
    if($res === true){
        echo "podarilo se";
    }
}

?>

</body>
</html>