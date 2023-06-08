<?php 
include_once 'header.php';
?>

  <section>
    <div class="container" style="padding-top: 10%; padding-bottom: 5%;">
    <h2>Zapomněli jste heslo?</h2>
    <br>
    <p>V případě zapomenutí hesla, prosím zadejte svojí e-mail adresu a 
      my Vám pošleme odkaz na změnu hesla.</p>
    <br>
    
    <!--<form action="includes/reset-requests.inc.php" method="post">
        <input type="text" name="email" placeholder="Váš email...">
        <button type="submit" name="reset-request-submit">Poslat nové heslo</button>
    </form>-->

    <form class="mx-auto container" style="padding-top: 2%; padding-bottom: 10%;" action="includes/reset-requests.inc.php" method="POST" name="formResetPassword">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Váš email" onkeyup="CheckForm()">
    </div>
  </div>
  <button type="submit" id="submitButton" name="reset-request-submit"  class="btn">Poslat nové heslo</button>
</form>


    <?php 
    if (isset($_GET["reset"])) {
        if ($_GET["reset"] == "success") {
            echo '<p class="signupsuccess"> Zkontrolujte si email</p>';
        }
    }

    ?>

    </div>
  </section>


<script type="text/javascript" language="javascript">
    function checkForm()
    {
        var f = document.forms["formResetPassword"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }
        if(cansubmit){
          document.getElementById('submitButton').disabled = !cansubmit;
        }
    }
</script> 


<?php 
include_once 'footer.php';
?>