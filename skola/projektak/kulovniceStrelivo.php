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
    <h2>Kulovnice a střelivo</h2><br>
    <p>
    Kulovnice je dlouhá ruční palná zbraň s drážkovaným vývrtem hlavně. Drážky 
    jsou v celé hlavni od nábojové komory až po ústí. Drážky mají tvar šroubovice
     a jejich účelem je udělit střele rotaci v podélném směru pro stabilizaci letu.
</p><br>

    <h2>5 Nejžnámnějších kalibrů</h2>
    <ul>
      <p>
          <!--223 rem-->
        
          <?php
          foreach ($query_results_calibers_rifle as $key => $query_result) {
    
          while ($row = mysqli_fetch_assoc($query_result['result'])) {
            echo $query_result['query'];
            
            
            echo '<li class="font-weight-bold">' . $row['text_title'] . '</li><br>';
            echo '<p>' . $row['text'] . '</p>';
            }
          }
          ?>

        

        </p>
    <img src="img/pageImages/DeerBullets.jpg" class="mx-auto d-block img-fluid">
    </ul>

    <h2>Druhy Nábojů</h2>
        <ul>
          <!--HOLLOWPOINTS ROUNDS-->
        
          <?php
          foreach ($query_results_bullets_rifle as $key => $query_result) {
    
          while ($row = mysqli_fetch_assoc($query_result['result'])) {
            echo $query_result['query'];
            echo '<li class="font-weight-bold">' . $row['text_title'] . '</li><br>';
            echo '<p>' . $row['text'] . '</p>';
            }
          }
          ?>
        </p>
        
    
        <img src="img/pageImages/handgun-ammo-types.jpg" class="mx-auto d-block img-fluid">
        </ul>
<br><br>
<h2>Naše video vám vysvětlí základy nabíjení zásobníku</h2><br>
<p>Chcete se rychle naučit z čeho se skládá náboj a hlavně <b>jak si nabít zásobník?</b> 
    Zkoukněte naše video ;)
</p>

      </div>
</div>


<br>
<div class="container">
  <div class="google-maps">
<iframe width="560" height="315" src="https://www.youtube.com/embed/Qedw3YjjyQY" 
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