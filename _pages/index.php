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
          <strong>Triff deine Wahl!</strong>
        </p>
      </div>

      <hr />

      <form class="px-4" action="index.php?seite=question2" method="POST">
        <p class="text-center"><strong>Deine Bewertung:</strong></p>

        <div class="form-check mb-2">
          <label for="customRange1" class="form-label">Beispiel Reichweite ( 1-5 )</label>
          <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1">
        </div>
        <div class="text-end mx-3 my-3">
          <button type="submit" class="btn btn-primary">Weiter</button>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- SITE CONTENT END -->
<?php include('includes/footer.php'); ?>