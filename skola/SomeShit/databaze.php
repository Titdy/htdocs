<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        Název hry: <input type="text" name="t">
        Počet Hráčů: <input type="text" name="n">

</form>


<?php


$mysqli;
if($mysqli -> connect_error){
    echo "nepodarilo se pripojit k DB";
    return;
}

$sql = "SELECT title, number_of_players FROM games";
$res = $mysqli -> query($sqp);
if($res !== FALSE){
    while($row = $res->fetch_assoc()){
        echo $row['title'];
}
    echo "chybka! " . $mysqli->error;
}

if(isset($_GET['odesl'])){
$t = $_GET['title'];
$n = $_GET['number_of_players'];

$sql = "INSERT INTO games (title, number_of_players) VALUES
$http_response_header = $mysqli" -> query($sql);
if($res === TRUE){
    echo "povedlo se pridat radek! ". $mysqli->insert_id;
}else{
    echo "Error: " . $mysqli->error;
}
}

?>

</body>
</html>