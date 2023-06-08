<?php 
include_once 'header.php';
require_once ('includes/dbh.inc.php');
require_once ('includes/courseReview.inc.php');
?>


<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Kurz</h2>
    <img src="img/pageImages/kurzPhoto.jpg" style="width: 40%;" class="float-right d-none d-sm-block">
    <p>Náš kurz střelby a bezpečné manipulace vedeme již od roku 2015 a náš tým se skládá ze 7 velmi 
      zkušených a ověřených instruktorů a expertů přes tento obor. Samozřejmně jelikož tady zde mluvíme o 
      střelných zbraních, <span style="font-weight: bold;">není možnost se přihlásit pod 18 let a bez zbrojního průkazu.</span> Avšak 
      stále je tu možnost (po osobním dohodnutí s námi) vzít sebou partnera či člena rodiny kterému však musí být přes 18 let 
      a byl by pod vašim dozorem.
    <h5>Co vše Vás čeká</h5>
    <ul>
      <li>Jak bezpečně zacházet se střelnou zbraní</li>
      <li>Jak nosit a tasit zbraň</li>
      <li>Jak střílet na krátké a delší vzdálenosti</li>
      <li>Správná nástřelba optiky</li>
      <li>Základy balistiky</li>
      <li>Pokročilá manipulace se zbraně</li>
      <li>Základy CQB (Close Quarters Combat)</li>
      <li>První pomoc při střelné ráně</li>
    </ul>
    </p>
    <h5>Co požadujeme od Vás</h5>
    <ul>
      <li>Vaši 100% pozornost a obezřetnost</li>
      <li>Platný zbrojní průkaz</li>
      <li style="font-weight: bold;">Vlastní Střelnou zbraň a munici! (množství munice se liší od druhu kurzu)</li>
    </ul>
    <br>
    <p>
      <h5>Cena kurzu</h5>
      <h6>Celodenní kurz základů střelby</h6>
      <ul>
        <li>3 999kč/osoba (sleva 5% pro členy klubu)</li>
      </ul>
      Naučíme Vás všechny základy nutné pro bezpečnou manipulaci se zbraní
      <br><br>
      <h6>3 denní kurz pokročilé střelby</h6>
      <ul>
        <li>12 999kč/osoba (sleva 10% pro členy klubu)</li>
      </ul>
      Naučíme Vás vše od sřílení na krátké a dlouhé vzdálenosti až po základy balistiky <br><br>
      <h6>7 denní kurz střelby</h6>
      <ul>
        <li>27 999kč/osoba (sleva 15% pro členy klubu)</li>
      </ul>
      Naučíme Vás a ukážeme vám <b>VŠE</b>. Pokorčilou manipulaci se zbraněmi, jak se pohybovat v budovách,
      práce nohou a pozicování, základy CQB a mnoho dalších typů a triků pro lepší výsledky. 
    </p>
    <p style="font-weight: bolder; font-size: 20px;">Kurzy nejsou časově pevně stanoveny, čas a místo setkání jsou vždy oznámeny 3 týdny před jejich konáním
      přes telefon a email.
    </p>
  </div>
</div>
<br>


<form class="mx-auto container"  style="padding-top: 2%; padding-bottom: 5%;" action="includes/courseRegistration.inc.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Jméno a Příjmení</label>
      <input type="text" class="form-control" name="name" id="inputName" placeholder="Jan Novák" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="janNovak@email.com" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone">Telefon</label>
    <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAdress">Adresa</label>
    <input type="text" class="form-control" name="address" id="inputAdress">
  </div>
  <div class="form-group">
    <label for="inputCity">Město</label>
    <input type="text" class="form-control" name="city" id="inputCity">
  </div>
  <div class="form-group">
    <p>Měl bych zájem o</p>
    
    <input type="radio" id="1DenKurz" name="courseType" value="jedno_denni_Kurz">
    <label for="html">Celodenní kurz základu střelby</label><br>
    <input type="radio" id="3DenKurz" name="courseType" value="tri_denni_kurz">
    <label for="html">3 denní kurz pokročilé střelby</label><br>
    <input type="radio" id="7DenKurz" name="courseType" value="sedmy_denni_kurz">
    <label for="html">7 denní kurz střelby</label><br>
  </div>
  <button type="submit" name="submit" class="btn">Zaregistrovat se</button>
</form>

<div class="container"  style="padding-top: 5%; padding-bottom: 5%;">
<div class="course-review">
  <h2>Recenze Kurzu</h2>
  <?php
  while ($row = mysqli_fetch_assoc($result_reviews)) {
    $user = $row['username'];
    $rating = $row['rating'];
    $review = $row['review_text'];
    ?>
    
      </div>
      <div class="review-text"><b><?php echo $user; ?></b></div>
      <div class="review-text"><?php echo $review; ?></div><div class="review">
      <div class="rating">
        <?php
        // Display star rating
        for ($i = 1; $i <= 5; $i++) {
          if ($i <= $rating) {
            echo '<span class="star-filled">&#9733;</span>';
          } else {
            echo '<span class="star-empty">&#9734;</span>';
          }
        }
        ?>
    </div>
  <?php
  }
  ?>
</div>

<br><br>
<h3>Napište nám vlastní recenzi</h3>
<form action="includes/courseReview.inc.php" method="POST">
  <div class="form-group">
    <label for="inputPhone">Vaše přezdívka</label>
    <input type="text" class="form-control" id="userName" name="username" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAdress">Jak hodnotíte náš kurz</label>
    <input type="text" class="form-control" name="courseReview" id="courseReview">
  </div>
  <div class="form-group">
    <label for="inputRating">Hodnocení kurzu</label>
    <select class="form-control" name="courseRating">
      <option value="1">1 Star</option>
      <option value="2">2 Stars</option>
      <option value="3">3 Stars</option>
      <option value="4">4 Stars</option>
      <option value="5">5 Stars</option>
    </select>
  </div>
  <button type="submit" name="submitCourse" class="btn">Pošlete Recenzi</button>
</form>
</p>
</div>





<div class="container">
<div class="google-maps">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=%20Dob%C4%9Btick%C3%A1,%20400%2001%20%C3%9Ast%C3%AD%20nad%20Labem-Severn%C3%AD%20Terasa&t=&z=13&ie=UTF8&iwloc=&output=embed" 
      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      <a href="https://putlocker-is.org"></a><br>

    

<style>
  /*mapa responsive*/
  .google-maps {
        position: relative;
        padding-bottom: 75%; 
        height: 0;
        overflow: hidden;
      }
      .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 65% !important;
      }




      .course-review {
  margin-top: 20px;
}

.rating {
  color: gold;
  font-size: 24px;
}

.star-filled {
  color: gold;
}

.star-empty {
  color: lightgray;
}

.review-text {
  margin-top: 10px;
}
</style>
</div>
    </div>

<?php 
include_once 'footer.php';
?>