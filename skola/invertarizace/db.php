<?php 

$mysqli = new mysqli("localhost", "root", "", "wea_test");
if(isset($mysqli -> connect_error)){
    die("Connection failed: " . mysqli_connect_error());
}
?>