<?php
$pagename = "Zusammenfassung";
require('includes/header.php');
if (isset($_POST['name']) && isset($_POST['lname']) && $_POST['name'] != '' && $_POST['lname'] != '') {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['lname'] = $_POST['lname'];
} else if (isset($_SESSION['name']) && isset($_SESSION['lname'])) {
} else {
    header('Location: index.php?seite=question10');
}
if ($arraycheck < 12) {
    header('Location: index.php?seite=index&arraycheck=true');
}
?>
<section>
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="/img/user.png"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">
                            <?php echo $_SESSION['name']; ?>
                            <?php echo $_SESSION['lname']; ?>
                        </h5>
                        <p class="text-muted mb-1">Testobjekt</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" onclick="deleteAllCookies()"
                                class="btn btn-primary">Zurücksetzen</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Vorname</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo $_SESSION['name']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nachname</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo $_SESSION['lname']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Resume</span> Aktivität
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">1. Gesundheit</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo ($_SESSION['range_home'] * 20); ?>%"
                                        aria-valuenow="<?php echo ($_SESSION['range_home'] * 20); ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">2. Nahrungsergänzungsmittel</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">3. Körperliche Aktivitäten</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo ($_SESSION['range_3'] * 20); ?>%"
                                        aria-valuenow="<?php echo ($_SESSION['range_3'] * 20); ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"> 4. Zusätzliche Aktivitäten</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"> 5. Menge an Aktivität</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo ($_SESSION['range_5'] * 20); ?>%"
                                        aria-valuenow="<?php echo ($_SESSION['range_5'] * 20); ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Resume</span> Ernährung
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">6. Menge an Kohlehydraten</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">7. Menge an Proteine</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">8. Menge an Gemüse</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mahlzeiten mit Früchte</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mahlzeiten mit Mikrowelle</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('includes/footer.php');
print_r($_SESSION);
print_r($_POST);
?>