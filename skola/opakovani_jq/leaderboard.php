<?php 

    
$mysqli = new mysqli("localhost", "root","", "minigame");
if(mysqli->connect_error){
    echo "nepripojeno k databazi";
    return;
}

$sql = "SELECT jmeno,skore from score order by skore desc";
$res = $mysqli -> query($sql);
if($res){
    echo "<table border = 1>";
    $i = 1;
    while($row = $res->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row . "</td>";
        echo "<td>" . $row . "</td>";
        echo "</tr>";
    }
    $i++;
}
?>