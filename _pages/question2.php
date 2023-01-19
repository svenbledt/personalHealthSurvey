<?php
$pagename = "Frage 2";
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
            Have some ideas how to improve our product?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />

        <form class="px-4" action="index.php?seite=question3" method="POST">
          <p class="text-center"><strong>Deine Bewertung:</strong></p>
          <!--radioboxen Frage 2-->
          <h3>Nimmst du Narungsergänzungsmittel ?</h3>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question" id="yes" value="yes">
            <label class="form-check-label" for="flexRadioDisabled">
              Ja mehme ich
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question" id="no" value="no">
            <label class="form-check-label" for="flexRadioCheckedDisabled">
              Nein gar nicht
            </label>
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=index" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
        <!--Ende-->
        <!--zurück und weiterleitung button-->
      </div>
    </div>

  </div>
</div>



<!-- SITE CONTENT END -->
<?php include('includes/footer.php');?>
