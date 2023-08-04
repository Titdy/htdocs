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
    <h2>Druhy Kulovnic</h2><br>
    Ne všechny kulovnice jsou stejné, proto se dělí podle značky, způsobu střelby, materiálů ze 
    kterých byly vyrobeny, jejich účelu, velikost ráže, uložení střeliva a spousty dalších faktorů, ale 
    povíme si o 3 nejdůležitějších faktorech, které zajímají každého střelce.
    <p>

</p><br>

    
<h2>Způsob střelby</h2>
    <ul>
    <li class='font-weight-bold'>Brokovnice - Sklápěcí</li><br>
    <p>
    Zlomová brokovnice se otevírá u závěru, obvykle pomocí páky aktivované palcem na vrcholu 
    zbraně. Hlaveň nebo hlavně se otáčí na čepu závěsu nebo na čepech a otáčejí se pod úhlem,
     takže můžete vhodit náboj do komory (komor) a poté ji zavřít a vystřelit.
        <h6>Příkladem jsou:</h6>
        <ul>
            <li>Dvojka Purdey Self-Opener</li>
            <li>Browning Superposed</li>
            <li>Beretta 680</li>
        </ul>
    </p>
    <li class='font-weight-bold'>Brokovnice -  "Pumpová" </li><br>
    <p>
    Pumpa-nebo slide-akce má předpažbí, které klouže nahoru a dolů tubus zásobníku vysunout vypálený náboj a nabít nový.

    <h6>Příkladem jsou:</h6>
        <ul>
            <li>Remington 870 Wingmaster</li>
            <li>Winchester Model 1897 (Trench gun)</li>
            <li>Winchester Model 12</li>
        </ul>

    </p>

    <li class='font-weight-bold'>Brokovnice - Poloautomatická</li><br>
    <p>
    Poloautomatické brokovnice střílejí s každým stisknutím spouště. Zbraň plní všechny 
    funkce vyhazování použitých nábojů a podávání nových nábojů ze zásobníku buď pomocí 
    zpětného rázu zbraně, nebo využíváním expandujících plynů vypouštěných z hlavně k řízení
     akce.
    <h6>Příkladem jsou:</h6>
        <ul>
            <li>M4 Benelli</li>
            <li>Browning Auto 5</li>
            <li>beretta 390</li>
        </ul>
    </p>
    <br>
</ul>

    <h2>Velikost ráže</h2>
    <br>
        <p>
<!--maloraze ROUNDS-->
        Jak se můžete dozvědět v sekci <a href="brokovniceStrelivo.php"><em>Střelivo a nabíjení brokovnice</em></a>, Brokovové ráže se dělí podle 
        podle průměru hlavně které začínají od ráže .410 (nejmenší) po ráži 10 (největší). Samozřejmě jsou zde 
        vyjímky jako ruská ráže 4 ale ty nejsou přístupné civilistům a proto je nezapočítáváme. Proto je 
        zbytečné dělit brokovnice do ráží, protože broky sami o sobě se dělí na <em><b>"Birdshots, Buckshots a Slugs"</b></em>, kde 
        rozdíl mezi nimi je kolik bylo použito olova na jednu kuly. A vzhledem k tomu že každá ráže může 
        střílet jak birdshots tak Slugy, není potřeba se strachovat. Avšak samozřejmě, <b>čím menší ráže brokovnice, tím 
            větší průměr hlavně a tím pádem "větší" nálož</b>.
        Tím pádem si můžeme udělat jednoduchý list:
        <br><br>
        <ul>
        <li class="font-weight-bold">Brokovnice - Nejmenší kalibry</li>
        <p>
            Nejlepší k lovu drobné zvěře, mají malý zpětný ráz avšak náboje jsou dražší.
        <ul>
            <li>Ráže .410</li>
            <li>Ráže 28</li>
        </ul>
    </p>
        <li class="font-weight-bold">Brokovnice - Střední kalibry</li>
        <p>
            Skvělé ráže pro lov v horách, menší zpětný ráz a výkon mezi rážemi 28 a 12.
            Zbraně svělé pro začátečníky.
        <ul>
            <li>Ráže 20</li>
            <li>Ráže 16</li>
        </ul>
    </p>
        <li class="font-weight-bold">Brokovnice - Největší kalibry</li>
        <p>
            Většinou největší ráže dovolené zákonem, zbraně těchto ráží střílí vše co do nich nabijete.
            Střelivo je bezproblému dostupné všude.
        <ul>
            <li>Ráže 12</li>
            <li>Ráže 10</li>
        </ul>
   
        </p>
     </ul>
        <img src="img/pageImages/shotgunShells.jpeg" class="mx-auto d-block img-fluid">
        </p>
        <br>

        <h2>Uložení střeliva</h2>
    <br>
        <p>
            <ul>
<!--velkorraze ROUNDS-->
        
<?php
         while($row = mysqli_fetch_assoc($result_jednorazove)){
          ?>
        <li class="font-weight-bold"><?php echo $row['text_title'] ?></li><br>
        <p>
          <?php echo $row['text'] ?>
          
          <?php
         }
         ?>
        </p>
        <!--velkorraze ROUNDS-->
        
<?php
         while($row = mysqli_fetch_assoc($result_opakovaci)){
          ?>
        <li class="font-weight-bold"><?php echo $row['text_title'] ?></li><br>
        <p>
          <?php echo $row['text'] ?>
          
          <?php
         }
         ?>
        </p>

            </ul>
        </p>

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