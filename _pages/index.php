<?php
$pagename = "Hauptseite";
require('includes/header.php');
?>
<script src="../js/validation/slider_home.js" type="text/javascript" defer></script>
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
            Weist du wirklich wie gesund du bist?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />

        <form class="slide px-4" action="index.php?seite=question2" method="POST" onsubmit="return validateRange();">
        <h3>Gesundheit :</h3>
          <p><strong>Wie Gesund bist du Körperlich:</strong></p>

          <div class="form-check mb-2">
            <label for="range-slider__range" id="stance" class="form-label">Ich bin Krank</label>
            <input id="range-slider__range" name="range" onchange="sliderOnChange()" type="range" value="1" min="1" max="5">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <span id="range-slider__value">0</span>
          </div>
          <div class="text-end my-3">
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- SITE CONTENT END -->
<?php include('includes/footer.php'); ?>