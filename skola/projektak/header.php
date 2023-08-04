<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--JQuery import-->
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  
  <!-- Include the Slick Carousel JavaScript file -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!--bootstrap import-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Zbraně bezpečně</title>
    <style>
      .header-image{
	    width: 100%; 
	    background-image: url("img/personell/kravmaga.jpg"); 
    	background-size: cover; 
    	background-position: center; 
}
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="img/pageImages/logoYes.png">
<body>
<header class="header-image">
  
  <h2><img src="img/pageImages/logoYes.png" style="height: 15%; width: 15%;"></h2>
</header>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="kurz.php">Kurz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="instructors.php">Instruktoři</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tutorialVideaMenu.php">Naučná videa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="terms.php">Termíny</a>
            </li>
        </ul>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<ul class='navbar-nav ml-auto'>";
            echo "<li class='nav-item'>";

            // Check if the logged-in user is the admin
            /*if ($_SESSION["useremail"] == "admin@admin.cz") {
                echo "<a class='nav-link' href='admin.php'>Admin</a>";
            } else {*/
                echo "<a class='nav-link' href='profile.php'>Profil</a>";
            //}

            echo "</li>";
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='includes/logout.inc.php'>Odhlásit se</a>";
            echo "</li>";
            echo "</ul>";
        } else {
            echo "<ul class='navbar-nav ml-auto'>";
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='signUp.php'>Registrace</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='login.php'>Přihlásit se</a>";
            echo "</li>";
            echo "</ul>";
        }
        ?>

    </div>

</nav>
