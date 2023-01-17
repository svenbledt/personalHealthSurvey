<?php
$pagename = "Frage 6";
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
            <strong>Wie gesund bist du Wirklich?</strong>
          </p>
          <p>
            Haben Sie Ideen, wie wir unser Produkt verbessern können?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />
        <!--hier kommen die einzelnen Eingaben hin-->
        <form class="px-4" action="index.php?seite=question7" method="POST">
          <h3>Kohlenhydrate Zähler</h3>anzahl
          <label for="carbohydrates">
            An einem typischen Tag: Wie viele deiner
            Malzeiten oder Snacks enthalten
            Kohlenhydrate?
          </label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
            </div>
            <input type="number" name="microwave" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default" required>
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question5" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
        <!--Ende-->
        <!--zurück und weiterleitung button-->
      </div>
    </div>
  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');?>