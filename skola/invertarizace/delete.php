<?php 
$id = $_POST['id'];

require_once "db.php";
/*$mysqli = new mysqli("localhost", "root", "", "wea_test");
if(isset($mysqli -> connect_error)){
    die("Connection failed: " . mysqli_connect_error());
}*/
$sql = "DELETE FROM inventar WHERE id=$id";
$res = $mysqli->query($sql);
if($res === true){
    header("Location: vypis.php");
}else{
    echo $mysqli->error;
    //header("Location: error404.php");
}

?>