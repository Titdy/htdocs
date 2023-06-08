<?php

    require "db.php";
    $q = "";
    if(isset($_GET["q"])) {
        $q = $_GET["q"]; 
    }

    $sql = "SELECT film_id, title, description, release_year, length, rental_rate FROM film";
    if($q != "") {
        $sql .= " WHERE title LIKE '%".$q."%'";
    }
    $sql .= " LIMIT 50";
    //echo "<pre>";

    $res = $mysqli->query($sql);
    $arr = []; // array();
    if($res !== FALSE) {
        while($row = $res->fetch_object()) {
            //print_r($row);
            $arr[] = $row; // array_push($row);
        }

        echo json_encode($arr);
    } else {
        echo "Chyba! " . $mysqli->error;
    }
    //echo "</pre>";
?>