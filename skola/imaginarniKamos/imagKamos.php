<?php 

if(isset($_POST['odeslat'])){
    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $vek = $_POST['vek'];
    $vyska = $_POST['vyska'];

    $mysqli = new mysqli("localhost", "root", "", "weashitukol");
    if(isset($mysqli -> connect_error)){
        die("Nepřipojeno k databázi " . mysqli_connect_error());
    }else{
        echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO info (jmeno,prijmeni,vek,vyska) VALUES ('$jmeno','$prijmeni','$vek','$vyska')";
    $result = $mysqli->query($sql);
    if($result === true){
        echo "<b><em>podarilo se pridat item</em></b>";
    }
}   

?>