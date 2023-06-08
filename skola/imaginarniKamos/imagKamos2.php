<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="imagKamos.css">
<style>
  body {
  font-family: Verdana, sans-serif; 
  margin:0;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
  text-align: center;
  
}
/*@-webkit-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-o-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
body{
  animation-name: fade;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}*/
header{
  padding: 20px;
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
  .formStyle{
    border: 1px solid black;
    width: 55%;
    background-color: #c05e5e;
    border-radius: 5px;
    display: inline-block;
    box-shadow: 8px 8px #00000075;

  }

  .animace{
    width: 100px;
    height: 40px;
    font-size: 15px;
    transition: width 0.8s;
    cursor: pointer;
    border-radius: 5px;

  }
  .animace:hover{
    width: 35%;
    transition-timing-function: ease-in;
  }

  .animace2{
    width: 200px;
    height: 40px;
    font-size: 15px;
    transition: width 1s;
    border-radius: 5px;
  }
  .animace2:hover{
    width: 55%;
    transition-timing-function: ease-in;
  }
  .numbertext {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

input[type=text]{
    padding: 10px;
    margin: 7px;
  }
  input[type=text]:focus{
    background-color: lightblue;
  }
  input[type=number]{
    padding: 10px;
    margin: 7px;
  }
  input[type=number]:focus{
    background-color: lightblue;
  }

* {
  box-sizing: border-box
}

.mySlides {
  display: none
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.nextSlide {
  cursor: pointer;
  position: absolute;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  /*border-radius: 0 3px 3px 0;*/
  user-select: none;
}

.nextSlide:hover {
  background-color: rgba(0,0,0,0.8);
}

.numbertext {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
/*  position: absolute;*/
  right: 25%;
  top: 0;
}

@media only screen and (max-width: 300px) {
  .nextSlide {
    font-size: 11px
  }
}

.mySlides1 {
  display: none
}
img {
  vertical-align: middle;
}

.slideshow-container1 {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

.nextSlide1 {
    cursor: pointer;
    position: absolute;
   /* top: 50%;*/
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    border-radius: 3px;
  /*border-radius: 0 3px 3px 0;*/
    user-select: none;
  }
   
  .nextSlide1:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  .numbertext1 {
    color: #000000;
    font-size: 12px;
    padding: 8px 12px;
 /*  position: absolute;*/
    right: 25%;
    top: 0;
  }

  @media only screen and (max-width: 300px) {
    .nextSlide1 {
      font-size: 11px
    }
  }


/*----------------------------------------------------------*/

.mySlides2 {
  display: none
}

.slideshow-container2 {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.nextSlide2{
  cursor: pointer;
  position: absolute;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  /*border-radius: 0 3px 3px 0;*/
  user-select: none;
}

.nextSlide2:hover{
  background-color: rgba(0,0,0,0.8);
}

.numbertext2 {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
/*  position: absolute;*/
right: 25%;
  top: 0;
}


@media only screen and (max-width: 300px) {
  .nextSlide2 {
    font-size: 11px
  }
}
/*---------------------------------------------------------------*/

.mySlides3 {
  display: none
}

.slideshow-container3 {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.nextSlide3{
  cursor: pointer;
  position: absolute;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  /*border-radius: 0 3px 3px 0;*/
  user-select: none;
}

.nextSlide3:hover{
  background-color: rgba(0,0,0,0.8);
}

.numbertext3 {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
/*  position: absolute;*/
right: 25%;
  top: 0;
}

@media only screen and (max-width: 300px) {
  .nextSlide3 {
    font-size: 11px
  }
}

</style>
</head>
<body>
  <header>Vytvořte si vlastního bezpohlavního, imaginárního kamaráda</header>

  <div class="formStyle">
    <form method="POST">
  <label>Jméno</label><input type="text" name="jmeno" id="jmeno" class="animace2">  <br>
  <label>Příjmení</label><input type="text" name="prijmeni" id="prijmeni" class="animace2">  <br>
  <label>Věk</label><input type="number" name="vek" id="vek" class="animace2"> <br>
  <label>Výška</label><input type="number" name="vyska" id="vyska" class="animace2"><br>
    <button type="submit" name="odeslat" class="animace">Odeslat</button>
      </form>
      <br>
  </div>
  <br>
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
        //echo "<b><em>Podařilo se připojit, </em></b>";
    }
    $sql = " ";
    $sql = "INSERT INTO info (jmeno,prijmeni,vek,vyska) VALUES ('$jmeno','$prijmeni','$vek','$vyska')";
    $result = $mysqli->query($sql);
    if($result === true){
        //echo "<b><em>podarilo se pridat item</em></b>";
    }
}   

?>
<br>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 9</div>
  <img src="face1.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src="face2.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="face3.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="face4.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 9</div>
  <img src="face5.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src="face6.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 9</div>
  <img src="face7.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src="face8.jpg" style="width:50%">
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src="face9.jpg" style="width:50%">
</div>

<a class="nextSlide" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<br>

<div class="slideshow-container1">

    <div class="mySlides1">
      <div class="numbertext1">1 / 8</div>
      <img src="top1.jpg" style="width:50%">
    </div>
    
    <div class="mySlides1">
      <div class="numbertext1">2 / 8</div>
      <img src="top2.jpeg" style="width:50%">
    </div>
    
    <div class="mySlides1">
      <div class="numbertext1">3 / 8</div>
      <img src="top3.jpeg" style="width:50%">
    </div>

    <div class="mySlides1">
      <div class="numbertext1">4 / 8</div>
      <img src="top4.jpg" style="width:50%">
    </div>

    <div class="mySlides1">
      <div class="numbertext1">5 / 8</div>
      <img src="top5.jpg" style="width:50%">
    </div>

    <div class="mySlides1">
      <div class="numbertext1">6 / 8</div>
      <img src="top6.jpeg" style="width:50%">
    </div>
    <div class="mySlides1">
      <div class="numbertext1">7 / 8</div>
      <img src="top7.jpeg" style="width:50%">
    </div>
    <div class="mySlides1">
      <div class="numbertext1">8 / 8</div>
      <img src="top8.jpg" style="width:50%">
    </div>
    
    <a class="nextSlide1" onclick="plusSlides1(1)">&#10095;</a>
    
    </div>
    <br>     
    <br>
    <div class="slideshow-container2">

      <div class="mySlides2">
        <div class="numbertext2">1 / 5</div>
        <img src="leg1.jpg" style="width:50%">
      </div>
      
      <div class="mySlides2">
        <div class="numbertext2">2 / 5</div>
        <img src="leg2.jpeg" style="width:50%">
      </div>
      
      <div class="mySlides2">
        <div class="numbertext2">3 / 5</div>
        <img src="leg3.jpg" style="width:50%">
      </div>

      <div class="mySlides2">
        <div class="numbertext2">4 / 5</div>
        <img src="leg4.jpg" style="width:50%">
      </div>

      <div class="mySlides2">
        <div class="numbertext2">5 / 5</div>
        <img src="leg5.jpg" style="width:50%">
      </div>
      
      <a class="nextSlide2" onclick="plusSlides2(1)">&#10095;</a>
      
      </div>
      <br>
      <br>

      <div class="slideshow-container3">

        <div class="mySlides3">
          <div class="numbertext3">1 / 5</div>
          <img src="boots1.jpg" style="width:50%">
        </div>
        
        <div class="mySlides3">
          <div class="numbertext3">2 / 5</div>
          <img src="boots2.jpg" style="width:50%">
        </div>
        
        <div class="mySlides3">
          <div class="numbertext3">3 / 5</div>
          <img src="boots3.jpg" style="width:50%">
        </div>
        
        <div class="mySlides3">
          <div class="numbertext3">4 / 5</div>
          <img src="boots4.jpg" style="width:50%">
        </div>

        <div class="mySlides3">
          <div class="numbertext3">5 / 5</div>
          <img src="boots5.jpeg" style="width:50%">
        </div>
        <a class="nextSlide3" onclick="plusSlides3(1)">&#10095;</a>
        
        </div>
        <br>
        <br>
      
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
//---------------------------------------------------------------------------
var slideIndex = 1;
showSlides1(slideIndex);

function plusSlides1(n) {
  showSlides1(slideIndex += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex = n);
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//-------------------------------------------------------------------

var slideIndex = 1;
showSlides2(slideIndex);

function plusSlides2(n) {
  showSlides2(slideIndex += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot2");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//---------------------------------------------------------------------------
var slideIndex = 1;
showSlides3(slideIndex);

function plusSlides3(n) {
  showSlides3(slideIndex += n);
}

function currentSlide3(n) {
  showSlides3(slideIndex = n);
}

function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("dot3");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
