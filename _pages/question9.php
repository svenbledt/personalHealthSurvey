<?php
$pagename = "Frage 9";
require('includes/header.php');
?>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
  <div class="container-md">
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

        <form class="anzahl px-4" action="index.php?seite=question10" method="POST">
          <h3>Frucht Zähler</h3>
          <label for="carbohydrates">
            An einem typischen Tag: Wie viele deiner
            Malzeiten oder Snacks enthalten Früchte?:
          </label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
            </div>
            <input type="number" name="microwave" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question8" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
print_r($_POST);
?>