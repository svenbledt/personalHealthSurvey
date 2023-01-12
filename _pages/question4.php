<?php require('includes/header.php'); ?>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
  <div class="card">
    <div class="card-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Your opinion matters</strong>
        </p>
        <p>
          Have some ideas how to improve our product?
          <strong>Give us your feedback.</strong>
        </p>
      </div>

      <hr />
<!--hier kommen die einzelnen Eingaben hin-->
    <h3>  Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>
    <br>
    <br>

    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck1">Gewichte heben</label>

      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck2">Gehen</label>

      <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck3">Wandern</label>

      <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck4">Joggen</label>

      <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck5">Rennen</label>

      <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck6">Schwimmen</label>

      <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck7">Tanzen</label>

      <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck8">Aerobics</label>

      <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck9">Pilates</label>

      <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck10">Team Sport</label>
      <div>
        <!--Braucht noch ein eingabefeld-->
        <input type="checkbox" class="btn-check" id="btnchec11" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnchec11">Andere</label>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
      </div>
    </div>
<!--Ende-->


<!--Ende-->
<!--zurück und weiterleitung button-->

    </div>
    <div class="card-footer text-end">
    <a href="#link" class="btn btn-primary" role="button">Zurück</a>
      <button type="button" class="btn btn-primary">Weiter</button>
    </div>

  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php'); ?>