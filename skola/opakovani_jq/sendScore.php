<?php 

    $name = $_POST["name"];
    $score = $_POST["score"];

    //echo $name . $score;

    $mysqli = new mysqli("localhost", "root","", "minigame");
    if(mysqli->connect_error){
        echo asResponse(500, "nepripojeno k databazi");
        return;
    }

    $sql = "SELECT id,skore from score where jmeno='".$name."'";

    //odesle do databaze
    $res = $mysqli->query($sql);
    if($res){
        if($res->num_rows == 0){ //pokud se nasel hrac s takovym jmenem
            insertNewScore($mysqli, $name, $score);
        }else{
            $row = $res->fetch_assoc();
            if($row["score"]< $score) //pokud ulozene score je mensi nez aktualni
            updateScore($mysqli, $row["id"], $score);
        }
    }

    function insertNewScore($mysqli, $name, $score){
        $sql = "INSERT INTO score (jmeno, skore) values ('$name', $score)";
        $mysqli->query($sql);
        if($res !== true){
            echo asResponse(400, "nepovedlo se" . $mysqli->error);
        } else {
            echo asResponse(-1, "score se ulozilo");
        }
    }
    function updateScore($mysqli, $id, $score){
        $sql = "UPDATE score set skore=$score where id=$id";
        $mysqli->query($sql);
        if($res !== true){
            echo asResponse(400, "nepovedlo se ulozit score" . $mysqli->error);
        } else {
            echo asResponse(-1, "score se upadtnulo");
        }
    }
    function asResponse($cislo, $zprava){
        return json_encode([
            "error" => $cislo,
            "message" => $zprava
        ]);
    }

?>