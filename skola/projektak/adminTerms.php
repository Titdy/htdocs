<?php
include_once 'header.php';
?>
<div class="sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="adminTerms.php">Terminy</a></li>
        <li class="list-group-item"><a href="adminUsers.php">Uživatelé</a></li>
        <li class="list-group-item"><a href="adminCourse.php">Zájemci o kurz</a></li>
    </ul>
</div>


<form class="mx-auto container"  style="padding-top: 2%; padding-bottom: 5%;" id="termsForm" action="includes/termsInfoFunction.inc.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="termsHeader">Nadpis / Téma</label>
      <input type="text" class="form-control" name="termsTitle" id="inputName">
    </div>
    <div class="form-group col-md-12">
      <label for="termsText">Text</label><br>
    <textarea rows="8" cols="155" name="termsText" form="termsForm"></textarea>
    </div>
    <button type="submit" name="submit" class="btn">Přidat nový příspěvek</button>
  </div>
</form>




<?php
include_once 'footer.php';
?>