<?php

    $mysqli = new mysqli("localhost", "root", "", "classicmodels");
    if($mysqli->connect_error) {
        echo "Nepodařilo se připojit k databázi!";
        return;
    }

    $q = "";
    if(isset($_GET["q"])) {
        $q = $_GET["q"]; 
    }

    $sql = "SELECT DISTINCT productCode, productName, productScale, productVendor, quantityInStock, buyPrice, MSRP, productDescription, textDescription FROM products, productlines";
    if($q != "") {
        $sql .= " WHERE productName LIKE '%".$q."%'";
    }
    $sql .= " ";
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
?>