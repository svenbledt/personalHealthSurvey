<?php require('includes/header.php'); ?>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
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
        <form action="result.php" method="post">
          <h3>Mikrowellen Zähler</h3>

          <label for="microwave">
            An einem typischen Tag: Wie viele deiner
            Malzeiten kommen aus der Mikrowelle
            oder sind schon fertig zubereitet?  :
          </label>
          <input type="number" id="microwave" name="microwave"><br>
        </form>
      </div>
<!--Ende-->
<!--zurück und weiterleitung button-->
    
      <div class="card-footer text-end">
        <a href="#link" class="btn btn-primary" role="button">Zurück</a>
        <button type="button" class="btn btn-primary">Weiter</button>
      </div>

    </div>
  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
?>