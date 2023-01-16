<?php require('includes/header.php'); ?>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
  <div class="card">
    <div class="card-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Deine Meinung zähl</strong>
        </p>
        <p>
          Haben Sie Ideen, wie wir unser Produkt verbessern können?
          <strong>Gib uns dein Feedback.</strong>
        </p>
      </div>

      <hr />
<!--hier kommen die einzelnen Eingaben hin-->
<form action="result.php" method="post">
     <h3>Kohlenhydrate Zähler</h3>
      <label for="carbohydrates">
        An einem typischen Tag: Wie viele deiner
        Malzeiten oder Snacks enthalten
        Kohlenhydrate?  :
      </label>
      <input type="number" id="carbohydrates" name="carbohydrates"><br>
</form>
<!--Ende-->
<!--zurück und weiterleitung button-->
    </div>
    <div class="card-footer text-end">
    <a href="#link" class="btn btn-primary" role="button">Zurück</a>
      <button type="button" class="btn btn-primary">Weiter</button>
    </div>

  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
?>