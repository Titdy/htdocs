<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item{
            margin-top: 15px;
            padding: 10px;
            border: 1px solid black;
            max-width: 400px;
        }
        .item input[type=submit]{
            color: red;
            float: right;
            width: 30px;
        }
        </style>
</head>
<body>
    <a href="zusatz.php">Přidat majetek</a>
<h1>Vypis</h1>

    <?php 
    
    $mysqli = new mysqli("localhost", "root", "", "wea_test");
    if(isset($mysqli -> connect_error)){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Podařilo se připojit";
    }
    $sql = "SELECT * FROM inventar";
    $res = $mysqli->query($sql);
    if($res !== false){
        while($row = $res->fetch_assoc()){
            echo "<div class='item'>";
            echo "<form method='POST' action='delete.php'>";
                echo $row["nazev"] . "<br>";
                echo $row["datum"] . "<br>";
                echo $row["cena"] . "<br>";
                echo "<input type='hidden' name='id' value='".$row["id"]."'>";
                echo "<input type='submit' name='odstranit' value='X'>";
                echo "</form>";
                echo "</div>";
        }
    }else{
        echo $mysqli->error;
    }

    ?>
</body>
</html>