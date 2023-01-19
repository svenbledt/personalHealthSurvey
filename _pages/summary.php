<?php
$pagename = "Zusammenfassung";
if (isset($_POST['name']) && isset($_POST['lname']) && $_POST['name'] != '' && $_POST['lname'] != '' && strlen($_POST['name']) > 2 && strlen($_POST['lname']) > 2 && !is_numeric($_POST['name']) && !is_numeric($_POST['lname'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['lname'] = $_POST['lname'];
    $name = $_SESSION['name'];
    $lname = $_SESSION['lname'];
} else if (isset($_SESSION['name']) && isset($_SESSION['lname'])) {
} else {
    header('Location: index.php?seite=question10');
}
require('includes/header.php');
if ($arraycheck < 13) {
    header('Location: index.php?seite=index&arraycheck=true');
}
?>
<section>
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="finish card-body text-center">
                        <img src="/img/user.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
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
                    <div class="finish card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><b>Vorname</b></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo $_SESSION['name']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="finish card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><b>Nachname</b></p>
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
                            <div class="finish card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Resume</span> Aktivität
                                </p>
                                <p class="mb-1" style="font-size: .77rem;"><b>1. Gesundheit</b></p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo ($_SESSION['range_home'] * 20); ?>%"
                                        aria-valuenow="<?php echo ($_SESSION['range_home'] * 20); ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>2. Nahrungsergänzungsmittel</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    if ($_SESSION['additionals'] == true) {
                                        echo "Nimmt Nahrungsergänzungsmittel zu sich.";
                                    } else {
                                        echo "Nimmt keine Nahrungsergänzungsmittel zu sich.";
                                    }
                                    ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>3. Körperliche Aktivitäten</b></p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo ($_SESSION['range_3'] * 20); ?>%"
                                        aria-valuenow="<?php echo ($_SESSION['range_3'] * 20); ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>4. Zusätzliche Aktivitäten</b></p>
                                <p class="text-muted mb-0">
                                    <?php echo $question4; ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>5. Menge an Aktivität</b></p>
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
                            <div class="finish card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Resume</span> Ernährung
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>6. Menge an Kohlehydraten.</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    $meals_kh = $_SESSION['meals_kh'];
                                    echo "Der Proband isst $meals_kh Mahlzeiten mit Kohlehydrate pro Tag.";
                                    ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>7. Menge an Proteine.</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    $meals_pro = $_SESSION['meals_pro'];
                                    echo "Der Proband isst $meals_pro Mahlzeiten mit Proteinen pro Tag.";
                                    ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>8. Menge an Gemüse.</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    $meals_veg = $_SESSION['meals_veg'];
                                    echo "Der Proband isst $meals_veg Mahlzeiten mit Gemüse pro Tag.";
                                    ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>9. Mahlzeiten mit Früchte.</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    $meals_fr = $_SESSION['meals_fr'];
                                    echo "Der Proband isst $meals_fr Mahlzeiten mit Früchten pro Tag.";
                                    ?>
                                </p>
                                <p class="mt-4 mb-1" style="font-size: .77rem;"><b>10. Mahlzeiten mit Mikrowellen- oder Fertigzubereitet am Tag.</b></p>
                                <p class="text-muted mb-0">
                                    <?php
                                    $meals_mw = $_SESSION['meals_mw'];
                                    echo "$meals_mw Fertigmahlzeiten pro Tag.";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php'); ?>