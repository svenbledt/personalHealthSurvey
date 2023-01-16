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
        <h3 class="px-4 text-start"> Welche zusätzliche körperliche Aktivität/en betreibst du am meisten?</h3>
        <form class="px-4" action="index.php?seite=question5" method="post">
          <div class="btn-group" id="button-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="1" autocomplete="off" checked>
            <label class="btn btn-outline-primary my-3" for="btnradio1">Gewichte heben</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="2" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio2">Gehen</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="3" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio3">Wandern</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" value="4" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio4">Joggen</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" value="5" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio5">Rennen</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio6" value="6" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio6">Schwimmen</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio7" value="7" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio7">Tanzen</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio8" value="8" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio8">Aerobic</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio9" value="9" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio9">Pilates</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio10" value="10" autocomplete="off">
            <label class="btn btn-outline-primary my-3" for="btnradio10">Team Sport</label>
          </div>


          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Aktivität</span>
            </div>
            <input type="Text" name="microwave" class="form-control" aria-label="Default"
              aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question3" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
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
print_r($_POST);
?>