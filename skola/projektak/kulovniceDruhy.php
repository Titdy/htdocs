<?php 
include_once 'header.php'; 
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>


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