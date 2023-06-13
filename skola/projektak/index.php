<?php 
include_once 'header.php';
?>
<head>

<style>

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;  
  position: relative;
  margin: auto;

}

/* Hide the images by default */
.mySlides {
 display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 10s;
}

@keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}

.divGallery{
  width: 100%
}

  </style>
<div class="divGallery">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include the Slick Carousel JavaScript file -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/pageImages/banner1.jpg" style="width:100%; height: 600px">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/pageImages/LogoBanner.jpg" style="width:100%; height: 600px">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/pageImages/banner3.png" style="width:100%; height: 600px">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/pageImages/banner4.jpg" style="width:100%; height: 600px">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img/pageImages/banner5.jpg" style="width:100%; height: 600px">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>-->
<br>

<!-- The dots/circles 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>-->
</div>



<div class="container" style="padding-top: 7%; padding-bottom: 3%;">
  <div class="col-sm-12 col-lg-12 col-md-12 ">
    <h2>O nás</h2>
    <p>Zdravíme, jsme skupinka střelců a instruktorů kteří sestavili náš střelecký klub v roce 2015.
      Máme mezi námi velmi zkušené lidi kteří rozumí svému řemeslu a koníčku - zbraním, střelivu a 
      armádě. <br><br> V týmu máme celkem <b>7 instruktorů</b> z čehož 2 se věnují střelbě již od malička a mají nastříleno deseti tisíce ran, 
      <b>duo aktivních policistů</b>, instruktora bojového umění <b>Muay-Thai</b>,
      <b>ex-vojáka</b> s 10 lety zkušenostmi z oblastní hlavně středního východu a sposty misemi a <b>záchranářku</b> s 
      vystudovanou vysokou školou a přes pět let zkušeností v oboru z čehož tři byly v zahraničí na misích <b>červeného kříže</b>. <br><br>Výchově o střelecké 
      bezpečnosti se věnujem aktivně již od samých počátku našeho klubu a vše okolo zbraní bereme 
      seriózně a jako náš milovaný koníček.
    </p>
  </div>
</div>
    

<div class="container "  style="padding-top: 7%; padding-bottom: 3%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Kurz</h2>
    <img src="img/pageImages/groupPhoto.png" style="width: 35%; padding-left: 10px;" class="float-right d-none d-sm-block">
    <p>Máte zájem o střelecký trénink a základy bezpečné manipulace se zbraní? <br>
    <a href="kurz.php">Zaregistrujte se</a> na náš kurz a s námi se naučíte vše od úplných začátků
    až po pokročilé techniky střelby.
    <h5>Co Vás čeká</h5>
    <ul>
      <li>Jak bezpečně zacházet se střelnou zbraní</li>
      <li>Jak nosit a tasit zbraň</li>
      <li>Jak střílet na krátké a delší vzdálenosti</li>
    </ul>
    A spousta dalších věcí co se můžete naučit, proto neváhejte a přihlašte se.
    </p>
  </div>
</div>


  <div class="container" style="padding-top: 7%; padding-bottom: 7%;">
    <div class="col-12 col-sm-12 col-lg-12 col-md-12">
      <h2>Naučná Videa</h2>
      <img src="img/pageImages/snowGuy.png" style="width: 25%; padding-left: 10px;" class="float-right d-none d-sm-block">
      <p>Od krátkých palných zbraní po dlouhé palné zbraně až k chladným zbraním.<br>
        Naučte se sami bezpečné manipulaci se zbraní pomocí našich naučných videí a tutoriálů.
        Sestavili jsme pro veřejnost širokou škálu videí s našimi experty přes tento obor.
      </p>
      <h5>Naše instruktážní videa jsou:</h5> 
      <ul>
        <li>Rychlá</li>
        <li>Snadná na pochopení</li>
        <li>Plná informací a tipů</li>
        <li>Od profesionálů</li>
       </ul>
    </div>
  </div>

    <div class="container" style="padding-top: 7%; padding-bottom: 15%;">
      <div class="col-12 col-sm-12 col-lg-12 col-md-12">
        <h2>Staň se členem</h2>
        <img src="img/pageImages/Club.png" style="width: 30%; padding-left: 10px;" class="float-right d-none d-sm-block">
        <p>Zaregistrujte se na našem webu a získejte možnost komentovat videa a týdenní
          online pošty s novinkamy ve střeleckém světě. <br>
          A když se stanete oficiálním členem našeho střeleckého klubu získáte slevu na naše 
          střelecké kurzy.<br>
          V případě že jste lektorem a měl by jste zájem se stát lektorem našich střeleckých tréninků
          nebojte se nás kontaktovat.


        </p>
      </div>
    </div>

    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
</script>


      <?php 
include_once 'footer.php';
?>