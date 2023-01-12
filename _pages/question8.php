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
    <h3>Gemüse Zähler</h3>

    <label for="vegetables">
      An einem typischen Tag: Wie viele deiner
      Malzeiten oder Snacks enthalten
      Gemüse?  :
    </label>
    <input type="number" id="vegetables" name="vegetables"><br>


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