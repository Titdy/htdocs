<?php

    $mysqli = new mysqli("localhost", "root", "", "sakila");
    if($mysqli->connect_error) {
        echo "Nepodařilo se připojit k databázi!";
        return;
    }
?>