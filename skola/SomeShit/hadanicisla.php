<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadání čísla</title>
</head>
<body>
    <form>
        Zadej číslo <input type="number" name="guess">
        <input type="submit" name="odesl">
</form>

<?php

    if(!isset($_SESSION["cislo"])){
        $_SESSION["cislo"] = rand(0,100);
    }
    $hadane = $_SESSION["cislo"];
    echo $hadane;

    if(isset($_GET["odesl"])){
        $guess = $_GET["guess"];

        if($hadane < $guess){echo "zadej mensi cislo: ";}
        if($hadane > $guess){echo "zadej vetsi cislo: ";}

        if($hadane == $guess){
            echo "vyhral jsi";
            unset($_SESSION["cislo"]);
        }
    }
    
    $pole = [];
    //$guess = input;
    array_push($pole);
    for($i = 1;$i <= $guess; $i++){ 
        print_r($pole);
    }
?>
</body>
</html>