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

        <form class="px-4" action="index.php?seite=question8" method="POST">
          <p class="text-center"><strong>Your rating:</strong></p>

          <div class="form-check mb-2">
            <label for="customRange1" class="form-label">Example range</label>
            <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1">
          </div>
          <div class="text-end mx-3 my-3">
            <a href="index.php?seite=question6" class="btn btn-primary" role="button">Zurück</a>
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