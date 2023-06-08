<?php 

include "generator.html";

rand($_POST["pocet"]);

$pocet_cisel = array ($_POST["pocet"]);
echo max($pocet_cisel);
$pocet_cisel = array ($_POST["pocet"]);
echo min($pocet_cisel);

function idealni_prumer(){
    
}

?>