<?php require('includes/header.php'); ?>
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
        <!--hier kommen die einzelnen Eingaben hin-->
        <h3> Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>
        <br>
        <br>
        <form class="px-4" action="index.php?seite=question5" method="post">
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
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Aktivität</span>
            </div>
            <input type="Text" name="microwave" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="text-end mx-3 my-3">
            <a href="index.php?seite=question3" class="btn btn-primary" role="button">Zurück</a>
            <button type="button" class="btn btn-primary">Weiter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--Ende-->


  <!--Ende-->
  <!--zurück und weiterleitung button-->

</div>

<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
?>