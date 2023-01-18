<?php
$pagename = "Frage 10";
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
        <div class="eingabe">
          <form class="px-4" action="index.php?seite=summary" method="POST">
            <h3>Mikrowellen Zähler</h3>

            <label for="microwave">
              An einem typischen Tag: Wie viele deiner
              Malzeiten kommen aus der Mikrowelle
              oder sind schon fertig zubereitet?
            </label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
              </div>
              <input type="number" name="microwave5" class="form-control" aria-label="Default"
                aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Gib bitte noch deinen Vornamen ein.</span>
              </div>
              <input type="Text" name="name" class="form-control" aria-label="Default"
                aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Gib bitte noch deinen Nachnamen ein.</span>
              </div>
              <input type="Text" name="lname" class="form-control" aria-label="Default"
                aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="text-end my-3">
              <a href="index.php?seite=question9" class="btn btn-primary" role="button">Zurück</a>
              <button type="submit" class="btn btn-primary">Fertig</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');?>