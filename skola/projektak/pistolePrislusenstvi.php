<?php
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
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
              <a class="dropdown-item" href="brokovniceRozborka.php">Rozborka Brokovnice Pumpvací</a>
              <a class="dropdown-item" href="brokovniceDvou.php">Rozborka Brokovnice Dvouhlavňové</a>
            </div>
          </div>
          <div class="dropdown show">
            <a class="btn dropdown-toggle text-white-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nože
            </a>
          
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="nozeUvod.php">Úvod do nožů</a>
              <a class="dropdown-item" href="nozeDruhy.php">Druhy Ocelí a Střenek</a>
          </div>


    </nav>

  </div>
</div>
<div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Příslušenství pro Pistole a Revolvery</h2><br>

    <p>
        Každá zbraň může být modifikována podle potřeb střelce/majitele, to stejné samozřejmě platí 
        o pistolích a revolverech, avšak moderní pistole mají větší modularitu než revolvery.

    </p>
    <h3>Co vše se dá modifikovat?</h3>
    <p>Vše, od ústí hlavně po předpažbí ale narozdíl od kulovnic a karabin, rozdíl mezi modularitou pistole a revolveru není velká.
    </p>
    <h3>Pistole</h3>
    <ul>
        <li>Muška</li>
        <li>Hlaveň</li>
        <li>Závěr</li>
        <li>Vratná pružina</li>
        <li>Kohout</li>
        <li>Záchyt závěru</li>
        <li>Hledí</li>
        <li>Pažbička</li>
        <li>Vypouštěč zásobníku</li>
        <li>Střenka</li>
        <li>Lučík a spoušť</li>
    </ul>
    <h6>Co se dá přidat</h6>
    <ul>
        <li>kolimátor</li>
        <li>Zásobník</li>
        <li>Svítilna</li>
        <li>Tlumič</li>
        <li>Flashhider či kompenzátor</li>
    </ul>
    <h3>Revolver</h3>
    <ul>
        <li>Muška</li>
        <li>Hlaveň</li>
        <li>Válec</li>
        <li>Kohout</li>
        <li>Rukojeť</li>
        <li>Spoušť a lučík</li>
        <li>Vypouštěč válce</li>
</ul>
<h6>Co se dá přidat</h6>
<ul>
        <li>kolimátor</li>
        <li>Svítilna</li>
        <li>Tlumič</li>
        <li>Flashhider či kompenzátor</li>
    </ul>
    <p>
        Jak bylo zmíněno dříve, modularita pistole a revolveru se moc neliší, a není divu jelikož se jedná 
        o jednoduché mechanismy s porovnání s kulovnicí či brokovnicí.<br>
        Zároveň si můžeme všimnout že revolver má méně částí než pistole, proto někteří střelci mají argument že 
        <b>"Revolver se skládá z méně částí a proto je lepší"</b>, a na jednu stranu mají pravdu, ano, revolver má 
        méně částí oproti pistoli ale moderní pistole se prokázali být stejně spolehlivé jako revolvery, proto není potřeba se 
        rozmýšlet mezi pistolí či revolverem pokud vás zajíma spolehlivost. Všechny moderní pistole (kvalitní) jsou stejně 
        spolehlivé jako revolvery.
    </p>
</div>
</div>





</div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>