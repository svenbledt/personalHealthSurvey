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
      <form class="px-4" action="POST">
        <p class="text-center"><strong>Your rating:</strong></p>

        <h3>Nimmst du Narungsergänzungsmittel ?</h3>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled">
            <label class="form-check-label" for="flexRadioDisabled">
                Ja mehme ich
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" >
            <label class="form-check-label" for="flexRadioCheckedDisabled">
                Nein gar nicht
            </label>
        </div>
      </form>
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