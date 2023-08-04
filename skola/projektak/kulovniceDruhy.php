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

    
          <!--223 rem-->
        
          <?php
         while($row = mysqli_fetch_assoc($result_zpusobStrelby)){
          ?>
        <p>
          <?php echo $row['text'] ?>
          
          <?php
         }
         ?>
        </p>

    <h2>Velikost ráže</h2>
    <br>
         <?php
          foreach ($query_results_raze_rifle as $key => $query_result) {
    
          while ($row = mysqli_fetch_assoc($query_result['result'])) {
          echo $query_result['query'];
                      
                      
          echo '<li class="font-weight-bold">' . $row['text_title'] . '</li><br>';
          echo '<p>' . $row['text'] . '</p>';
            }
          }
          ?>

        <img src="img/pageImages/shotgunShells.jpeg" class="mx-auto d-block img-fluid">
        </ul>
        <br>

        <h2>Uložení střeliva</h2>
    <br>
        <p>
            <ul>
<!--velkorraze ROUNDS-->
        
<?php
          foreach ($query_results_fireAction_rifle as $key => $query_result) {
    
          while ($row = mysqli_fetch_assoc($query_result['result'])) {
          echo $query_result['query'];
                      
                      
          echo '<li class="font-weight-bold">' . $row['text_title'] . '</li><br>';
          echo '<p>' . $row['text'] . '</p>';
            }
          }
          ?>
        </p>

            </ul>
        </p>

</div>
</div>

<br>

</div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>