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
      <h3> Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>
      <br>
      <br>
      <form action="result.php" method="post">
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Gewichte heben</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Gehen</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Wandern</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Joggen</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Rennen</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Schwimmen</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Tanzen</label>

          <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Aerobics</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Pilates</label>

          <input type="checkbox" class="btn-check" id="btncheck" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck">Team Sport</label>
          <div>
      </form>

      <form>
        <div>
          <!--Braucht noch ein eingabefeld-->
          <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
          <label class="btn btn-outline-primary mx-3 my-3" for="btncheck10">Team Sport</label>

          <label for="akiv">Akivitäten:</label>
          <input type="text" id="aktiv" name="aktiv"><br>
        </div>
        <div class="card-footer text-end">
          <a href="index.php?seite=question3" class="btn btn-primary" role="button">Zurück</a>
          <button type="button" class="btn btn-primary">Weiter</button>
        </div>

      </form>
    </div>
  </div>
  <!--Ende-->


  <!--Ende-->
  <!--zurück und weiterleitung button-->

</div>

</div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
?>