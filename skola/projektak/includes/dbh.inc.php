<?php 
//kdyz je dokument plnej jen php kodem (zadny html/css atd.) neni potreba ukoncit tagem ->
//kdyby byla mezera po ? > tak to muze zpusobit error (proste php hariki bariki)


$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projekt_tutorial";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}