<?php require('includes/header.php'); ?>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
  <div class="container-md">
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
          <p>
            <strong>Deine Meinung zählt</strong>
          </p>
          <p>
            Haben Sie Ideen, wie wir unser Produkt verbessern können?
            <strong>Gib uns dein Feedback.</strong>
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
              oder sind schon fertig zubereitet? :
            </label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
              </div>
              <input type="number" name="microwave" class="form-control" aria-label="Default"
                aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="text-end mx-3 my-3">
              <a href="index.php?seite=question9" class="btn btn-primary" role="button">Zurück</a>
              <button type="button" class="btn btn-primary">Fertig</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
?>