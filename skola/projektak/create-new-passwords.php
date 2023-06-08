<?php 
include_once 'header.php';
?>

  <h1>JSEM NA SIGN UP STRANCE</h1>


  <section>

    <?php 
    
        $selector = $_GET["selector"]; 
        $validator = $_GET["validator"];
        
        if (empty($selector) || empty($validator)) {
            echo "Nemohli jsme potvrdit Vaši žádost";
        }else{
            if (ctype_xdigits($selector) !== false && ctype_xdigits($validator) !== false) {
                ?>

                <form action="includes/reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector?>;">
                    <input type="hidden" name="validator" value="<?php echo $validator?>;">
                    <input type="password" name="pwd" placeholder="Nové heslo...">
                    <input type="password" name="pwd-repeat" placeholder="Nové heslo znovu...">
                    <button type="submit" name="reset-password-submit">Resetovat heslo</button>
                </form>

                <?php
            }
        }
    ?>
    
  </section>





<?php 
include_once 'footer.php';
?>