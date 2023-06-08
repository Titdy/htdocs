<?php 
include_once 'header.php';
?>

  <section>
  <div class="container"  style="padding-top: 10%; padding-bottom: 5%;">
  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
    <h2>Registrace</h2>
    <!--<img src="img/groupPhoto.png" style="width: 40%;" class="float-right d-none d-sm-block">-->
    <p>Neváhejte se zaregistrovat se na naši stránku. Po úspěšné registraci budete mít možnost:
      <ul>
        <li>O krok jednoduší přihlášení do našeho střeleckého klubu</li>
        <li>Možnost komentovat naše videa</li>
        <li>Novinky zasílány na email</li>
      </ul>
    </p>
  </div>
</div>

      <form class="mx-auto container"  style="padding-top: 2%; padding-bottom: 10%;" action="includes/signUp.inc.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Jméno a Příjmení</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Jan Novák" >
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="janNovak@email.com" >
          </div>
        </div>
        <div class="form-group">
          <label for="inputUsername">Uživatelské jméno</label>
          <input type="tel" class="form-control" id="inputUsername" name="uid" placeholder="janNovak1">
        </div>
        <div class="form-group">
          <label for="inputPassword">Heslo</label>
          <input type="password" class="form-control" name="pwd" id="inputPassword">
        </div>
        <div class="form-group">
          <label for="inputPasswordRepeat">Heslo Znova</label>
          <input type="password" class="form-control" name="pwdrepeat" id="inputPasswordRepeat">
        </div>
        <button type="submit" name="submit" class="btn">Zaregistrovat se</button>
        
      </form>
      
  <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyInput") {
        echo "<p>Fill in All Fields</p>";
      }
      elseif ($_GET["error"] == "invalidUid") {
        echo "<p>Fill in proper username</p>";
      }
      elseif ($_GET["error"] == "invalidEmail") {
        echo "<p>Fill in proper email</p>";
      }
      elseif ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>passwords doesnt match</p>";
      }
      elseif ($_GET["error"] == "stmtFailed") {
        echo "<p>Something went wrong, try again!</p>";
      }
      elseif ($_GET["error"] == "usernameTaken") {
        echo "<p>username already taken</p>";
      }
      elseif ($_GET["error"] == "none") {
        echo "<p>You have signed up</p>";
      }
    }
  ?>

  </section>
<?php 
include_once 'footer.php';
?>