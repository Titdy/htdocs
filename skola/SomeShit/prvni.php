<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prvni</h1>
    <a href="druhy.php">druha stranka</a>
    <?php
    if(isset($_SESSION["a"])){
        
    }
    $_SESSION["a"]  = 9;
    ?>
    
</body>
</html>