<?php require('includes/header.php');
if ($_POST['noIDont'] == true) {
  $_SESSION['additionals'] = false;
  header('Location: index.php?seite=question4');
} else if ($_POST['yesIDo'] == true) {
  $_SESSION['additionals'] = true;
  header('Location: index.php?seite=question4');
}
?>
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

        <form class="px-4" action="index.php?seite=question4" method="POST">
        <h3>Wichtigkeit Körperliche Aktivität</h3>
          <p class="text-center"><strong>Wie wichtig ist köperliche Aktivität für dich?:</strong></p>

          <div class="form-check mb-2">
            <label for="fader" class="form-label">nicht wichtig</label>
            <label class="" style="text-align: end;">wichtig</label>
            <label for="fader" class="form-label">Sehr wichtig</label>
            <input id="range-slider__range" type="range" value="0" min="1" max="5">

            <span id="range-slider__value">0</span>
          </div>
          <div class="text-end mx-3 my-3">
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