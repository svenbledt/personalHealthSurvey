<!doctype html>
<html lang="en" class="h-100">
<?php
require('config.php');
$arraycheck = count($_SESSION);
?>

<head>
    <title><?php echo "$sitename - $pagename"; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Custom JS -->
    <script src="../js/main.js" type="text/javascript" defer></script>
</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="../img/logo.png"></img></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=index') {
                            echo ' active';
                        } ?>" aria-current="page" href="index.php?seite=index">Frage 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question2') {
                            echo ' active';
                        } ?>" href="index.php?seite=question2">Frage 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question3') {
                            echo ' active';
                        } ?>" href="index.php?seite=question3">Frage 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question4') {
                            echo ' active';
                        } ?>" href="index.php?seite=question4">Frage 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question5') {
                            echo ' active';
                        } ?>" href="index.php?seite=question5">Frage 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question6') {
                            echo ' active';
                        } ?>" href="index.php?seite=question6">Frage 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question7') {
                            echo ' active';
                        } ?>" href="index.php?seite=question7">Frage 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question8') {
                            echo ' active';
                        } ?>" href="index.php?seite=question8">Frage 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question9') {
                            echo ' active';
                        } ?>" href="index.php?seite=question9">Frage 9</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question10') {
                            echo ' active';
                        } ?>" href="index.php?seite=question10">Frage 10</a>
                    </li>
                    <?php if ($arraycheck > 10) { ?>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=summary') {
                            echo ' active';
                        } ?>" href="index.php?seite=summary">Zusammenfassung</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-5 flex-shrink-0">