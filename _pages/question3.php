<?php
$pagename = "Frage 3";
require('includes/header.php');
?>
<script src="../js/validation/slider_3.js" type="text/javascript" defer></script>
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
            Wie wichtig ist Körperliche Aktivität für dich?<br>
            <strong>Triff deine Wahl und finde es heraus!</strong>
          </p>
        </div>

        <hr />
        
        <form class="px-4" action="index.php?seite=question4" method="POST" onsubmit="return validateRange();">
          <h3>Priorität:</h3>
          <p><strong>Wie wichtig ist dir deine Körperliche Aktivität:</strong></p>
          <!--slider Frage 3-->
          <div class="form-check mb-2">
            <label for="range-slider__range" id="stance" class="form-label">0</label>
            <input id="range-slider__range" name="range2" onchange="sliderOnChange()" type="range" value="1" min="1"
              max="5">
            <input type="hidden" name="range-slider-changed" id="range-slider-changed">
            <span id="range-slider__value">0</span>
          </div>
          <div class="text-end my-3">
            <a href="index.php?seite=question2" class="btn btn-primary" role="button">Zurück</a>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- SITE CONTENT END -->
<?php include('includes/footer.php')?>