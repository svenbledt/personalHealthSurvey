<?php
$pagename = "Frage 7";
require('includes/header.php');
if (isset($_POST['microwave'])) {
  $_SESSION['meals_kh'] = $_POST['microwave'];
}
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

        <form class="px-4" action="index.php?seite=question8" method="POST">
          <h3>Protein Zähler</h3>
          <label for="carbohydrates">
            An einem typischen Tag: Wie viele deiner
            Malzeiten oder Snacks enthalten Protein?
          </label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
            </div>
            <input type="number" name="microwave2" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default" required>
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question6" class="btn btn-primary" role="button">Zurück</a>
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