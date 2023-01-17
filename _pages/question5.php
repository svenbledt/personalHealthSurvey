<?php
$pagename = "Frage 5";
require('includes/header.php');
if (isset($_POST['btnradio'])) {
  $_SESSION['plus_activity'] = $_POST['btnradio'];
}
if (isset($_POST['custom_a'])) {
  $_SESSION['custom_a'] = $_POST['custom_a'];
}
?>
<script src="../js/validation/slider_5.js" type="text/javascript" defer></script>
<!-- SITE CONTENT -->
<div class="mt-4 mx-0 mx-sm-auto">
  <div class="container-md">
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
          <p>
            <strong>Wie gesund bist du Wirklich?</strong>
          </p>
          <p>
            Wie schätzt du die menge deiner Körperlichen Aktivität ein?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />

        <form class="px-4" action="index.php?seite=question6" method="POST" onsubmit="return validateRange();">
          <h3>Menge :</h3>
          <p><strong>Hast du das Gefühl, zu wenig, genügend oder zu viel Körperlich aktiv zu sein:</strong></p>

          <div class="form-check mb-2">
            <label for="range-slider__range" id="stance" class="form-label">0</label>
            <input id="range-slider__range" name="range" onchange="sliderOnChange()" type="range" value="1" min="1"
              max="5">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <span id="range-slider__value">0</span>
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question4" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- SITE CONTENT END -->
<?php include('includes/footer.php');
print_r($_SESSION);
print_r($_POST);
?>