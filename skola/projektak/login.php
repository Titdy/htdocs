<?php 
include_once 'header.php';
?>
  <section>
    

    <div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
      <div class="col-12 col-sm-12 col-lg-12 col-md-12">
      <h2>Přihlašte se</h2>
<form class="mx-auto" style="padding-top: 2%; padding-bottom: 10%;" action="includes/login.inc.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="loginName">Email</label>
      <input type="text" class="form-control" name="uid" id="loginName" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="loginPwd">Heslo</label>
      <input type="password" class="form-control" name="pwd" id="loginPwd" placeholder="" >
    </div>
  </div>
  <button type="submit" name="submit" class="btn">Přihlásit se</button>
  <button class="btn"><a href="reset-password.php" class="text-reset text-decoration-none">Zapomenuté heslo?</a></button> 
</form>

      </div>
    </div>

    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyInput") {
        echo "<div class='container'  style='padding-top: 10%; padding-bottom: 5%;'><p>Fill in All Fields</p></div>";
        

      }
      elseif ($_GET["error"] == "wrongLogin") {
        echo "<p>Incorect Login</p>";
      }
    }
    if (isset($_GET["newpwd"])) {
      if ($_GET["newpwd"] == "passwordupdated") {
        echo '<p class="signupsuccess"> Vaše heslo bylo změněno</p>';
      }
    }
  ?>
</section>

<?php 
include_once 'footer.php';
?>