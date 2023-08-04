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
    <h2>Co je to Pistole?</h2><br>
    <p>
    Pistole je krátká ruční střelná zbraň. První pistole byly jednoranové či 
    víceranové a používaly černý střelný prach. V 19. století se objevily samonabíjecí 
    pistole a jako náplň se začal užívat nově objevený bezdýmný střelný prach. 
    Oproti revolverům a jiným krátkým palným zbraním (např. derringerům) se 
    moderní pistole vyznačují ve valné většině samonabíjecí konstrukcí. 
    Prakticky všechny moderní pistole užívají horizontálně posuvný, 
    blokový závěrový mechanismus. <a href="https://cs.wikipedia.org/wiki/Pistole"><span><i>-Wikipedie</i></span></a>
    </p>
    <br>
    <p>
    Ruční zbraně/pistole. Jedná se o menší střelné zbraně, které mají kratší hlavně. Mají 
    velkou přesnost díky loupení v tlusté hlavni, která je navržena tak, aby vydržela velký 
    tlak. Protože jsou tyto zbraně menší než jiné typy zbraní, lze je snáze přenášet a v 
    případě potřeby je lze střílet i jednou rukou. Jsou skvělé pro ochranu, sebeobranu a 
    střelbu na dálku.


        Z pohledu armádního vybavení se pistole považuje za sekundarní zbraň, ale pro nás civilisty 
        není zrovna možnost nosit na sobě karabiny AR-15 či naše české Breny.

    </p>

    <?php 
    $projects = array();
    while ($project =  mysql_fetch_assoc($result_records))
    {
        $projects[] = $project;
    }
    foreach ($projects as $project)
    {
?>
    <tr>
        <td><?php echo $project['text_title']; ?></td>
        <td><?php echo $project['text']; ?></td>
    </tr>
<?php
    }
?>



</div>
</div>





</div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>