<?php
$pagename = "Frage 9";
require('includes/header.php');
?>
<!-- SITE CONTENT -->
<div class="mt-2 mx-0 mx-sm-auto">
  <div class="container-md">
    <div class="card">
      <div class="card-body">
        <div class="text-center">
        <img src="/img/care.png" alt="careLogo" class="rounded-circle img-fluid" style="width: 150px;">
          <p>
            <strong>Wie gesund bist du Wirklich?</strong>
          </p>
          <p>
            Haben Sie Ideen, wie wir unser Produkt verbessern können?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />

        <form class="px-4" action="index.php?seite=question10" method="POST">
          <h3>Frucht Zähler</h3>
          <label for="carbohydrates">
            An einem typischen Tag: Wie viele deiner
            Malzeiten oder Snacks enthalten Früchte?
          </label>
          <!--input-groupmit Numerischem eingabefeld Frage 6-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Anzahl</span>
            </div>
            <input type="number" name="microwave4" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default" required>
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
<?php include('includes/footer.php');?>