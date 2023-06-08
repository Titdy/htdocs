<?php 
    $min = 0;
    $max = 10;
    $pocet = 5;

    if(isset($_POST["min"])){
        $min = $_POST["min"];
    }

    if(isset($_POST["max"])){
        $max = $_POST["max"];
    }
    if(isset($_POST["pocet"])){
        $pocet = $_POST["pocet"];
    }

    $pole = [];
    for($i = 0; $i < $pocet; $i++){
        $pole[] = rand($min, $max);
    }

    echo json_encode($pole);

    echo rand($min,$max);
?>