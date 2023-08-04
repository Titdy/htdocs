<?php 
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>

<div class="container" style="padding-top: 7%; padding-bottom: 0%;">
  <div class="col-sm-12 col-lg-12 col-md-12 ">
    <h2>Nejčastěji kladené otázky</h2>
  </div>
</div>



  <?php
         while($row = mysqli_fetch_assoc($result_faq)){
          ?>
          
        <p><div class='container border border-top-0 border-left-0 border-right-0 border-primary ' style='padding-top: 7%; padding-bottom: 3%;'>
            <div class="col-sm-12 col-lg-12 col-md-12 ">
          <br>
        <h2><?php echo $row['faq_title'] ?></h2><br><br>
        

          <?php echo $row['faq_text'] ?>
          </div>
</div>
          <?php
         }
         ?>  
        </p>



<?php 
include_once 'footer.php';
?>