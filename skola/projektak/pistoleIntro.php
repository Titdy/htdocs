<?php 
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>


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