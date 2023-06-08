<?php 
include_once 'header.php';
?>


<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Naučná Videa</h2>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pistole/Revolvery
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="pistoleIntro.php">Co je to Pistole?</a>
              <a class="dropdown-item" href="pistoleDruhy.php">Druhy Pistolí</a>
              <a class="dropdown-item" href="pistoleStrelivo.php">Střelivo a nabijení Pistole</a>
              <a class="dropdown-item" href="pistolePrislusenstvi.php">příslušenství</a>
              <a class="dropdown-item" href="pistoleRozborka.php">Rozborka Pistole</a>
            </div>
          </div>
          <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kulovnice
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="kulovniceIntro.php">Co je to Kulovnice?</a>
              <a class="dropdown-item" href="kulovniceDruhy.php">Druhy Kulovnic</a>
              <a class="dropdown-item" href="kulovniceStrelivo.php">Střelivo a nabíjení Kulovnice</a>
              <a class="dropdown-item" href="kulovnicePrislusenstvi.php">příslušenství</a>
              <a class="dropdown-item" href="karabinaRozborka.php">Rozborka Karabiny</a>
              <a class="dropdown-item" href="kulovniceRozborka.php">Rozborka Kulovnice</a>
            </div>
          </div>
        
        <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Brokovnice
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="brokovniceIntro.php">Co je to Brokovnice</a>
              <a class="dropdown-item" href="brokovniceDruhy.php">Druhy Brokovnic</a>
              <a class="dropdown-item" href="brokovniceStrelivo.php">Střelivo a nabíjení Brokovnice</a>
              <a class="dropdown-item" href="brokovniceRozborka.php">Rozborka Brokovnice</a>
            </div>
          </div>


    </nav>

  </div>
</div>

<div class="container"  style="padding-top: 0%; padding-bottom: 0%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
<p>
  <h3>Vítejte do sekce našeho online kurzu</h3><br>
  Máte protíže s koupí vaší první střelné zbraně? Či nemáte ponětí jaký je rozdíl mezi střelivem?
  Žádný problém, naše krátká a přehledná videa vysvětlují většinu střeleckých témat a problému, tak neváhejte
  a začněte se porozhlížet ;)
  <br>
  Nahoře můžete Vidět náše 3 hlavní témata - Pistole/Revolvery, Kulovnice a Brokovnice. Avšak vás prosíme 
  o čtení dále. 
</p>
<br>
<h3>4 Základní pravidla bezpečnosti střelných zbraní</h3>
<br>
<ul class="font-weight-bold">
  <li>Vždy mějte zbraň namířenou bezpečným směrem, aneb nikdy nemiřte zbraní na nic, na co nemáte v úmyslu střílet.
</li>
  <li>Zacházejte se všemi zbraněmi, jako by byly nabité.</li>
  <li>Držte prst mimo spoušť, dokud nebudete připraveni střílet.</li>
  <li>Buďte si vždy jisti svým cílem a tím, co je za ním.</li>
</ul>

<br>
<p>
Tyto pravidla jsou 4 základními pravidly střelby a patří mezi ty nejdůležitější, proto vás žádámne,
jak o vaše bezpečí, tak i o bezpečí ostatních, aby jste si tyto pravidla zapamatovali a měli je vždy namysli.
Vědomost a dodržování těchto pravidel může být rozdíl mezi životem a smrtí vás či ostatních.</p>
</div>
</div>




<br>
<div class="container">
  <div class="google-maps">
<iframe width="560" height="315" src="https://www.youtube.com/embed/cSWXLU519U0" 
  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
  allowfullscreen></iframe>
</div></div>

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
</style>
</div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>