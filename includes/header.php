<!doctype html>
<html lang="en" class="h-100">
<?php require('config.php'); ?>
<head>
    <title>BLEBLABEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Convert this to an external style sheet -->
    <style>
        main>.container {
            padding: 60px 15px 0;
            margin-bottom: 5rem;
        }

        .sticky-footer {
            position: sticky;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAABUFJREFUeF7tmodOKzsQhmfpovfeexe8/ysgARKEGghEBFIgkNDbHv2+8mqvyYadxInu1ZmRkFAya89+nmpwtra2XBIJRcARWKE4KSWBFZ6VwGKwElgCi0OAoSs5S2AxCDBUxbMEFoMAQ1U8S2AxCDBUxbMEFoMAQ1U8S2AxCDBUxbMEFoMAQ1U8S2AxCDBUxbM4sFzXZf/B4vDwkJ6enhjb/HdUBwYGaHR0tCSDHIEVnpvACs+KnHw+756enjIeIfr+/qYSope1R6WUHcehmpoa9vK1tbXkZLNZNxqNsh/+2x4YHx8nJ5PJuLFY7G97d9b7tra20sLCAjnJZNKNx+Osh8tR7unpocnJSW+JRCJB19fXvy45MTFBvb29nh5Sx8PDw6/PlauAkF1aWqKmpiZyEomEC4OrKbOzs9TR0aG2RP6LRCL09vYWaEJLSwstLi5632cyGbq4uKiKyUNDQzQ8PKz2cuLxuJtMJquysd6kvr6elpeXqa6uTn2Uy+Xo5OSkoA1IyADV3Nysvn9/f1dwv76+Km5zQ0MDrayseAXBicViLk6q2tLd3U1TU1Petufn53R3d/fDjP7+fhobG/M+B1TArYbAPtipD9SJRqMuNseHCA2cIMok5PPzk56fn5Vxt7e3KmRsyszMDHV2dqolPz4+aH9//18eAw/EyWp70uk0XV5e2jQhVOijTTo4OCAnnU67MFiHRNDTeBkUgmw2a81YMxxNGNPT09TV1eWFH2DaPrCgl5mfn6e2tjb1NRwFHcOPDh4U8RPUuF1dXdHNzY01YGY44gThze3t7TQ3N+ftc3x8TPl83tq+xRYCJMCCgAUOCQVIwcIvqVRKlWJdleD6eAiDJ/oMv9gu234PAqijoyNVABobG9W2sK2a7Y3fq5BHkU8hTiqVUn1WsfFlZGSEBgcHPV4ACtq2Rh6kAOQmnQoATFc/7IXqV63ww77oq7Tg4B4fH/+BFfbfJP29ER7EiHR/f28tLJCb4GGm+I21tlmRhdAwo3GGvLy8qIPSEhqW2RhWIjSQo5CrtPhDoBqg4Nlra2tevkblRdFhw8IDGxsbXhkv1kiW8mJoAJGndJuANdC64GRRiashfX19hIFZy+7urrKhJFirq6te0sVNKW5MbYnpVXpdhHq1bkX8ib3Q+4UOQxgPF4UHQFDGUc5tiP9EUTQw9/mHbfQ46HUqKQjB9fV1wngFKdQihYaFvgthqBezlU/M8NO3EBhxMOpAMAei+lYyHM0Co/s9/wGFhoUuH+OJFrQbSPLlij/8Xl9fVY6CdyF3IYdpT0YPyL3R5djmPxzsv729/aM1cnZ2dlx/Eiu0gTn5Q2dvb6/otUoYQ3E/hXsqLWabYB5QJcMRvZXu7cyWwUvwuVxO3cEHNX0AhQrhv3jDfHh2dhaGR6COGX5BQ7J/2EY4wvNwTWNbNjc3vZYhKMV44w7mPbi6zgtIeBh30Llr4jAQXoh4Ltdgf/gVunHQMEyotlsW7IM9ULy0BN3esgZpgEIZ1+1/qadrht9v04B5p4VqafMOzj84452C8nHovxviRGFkuR5lekrYPgq3pZgidHW0GY64x8M4pyUoNzqRSMRF2cTNAqZ8hB+qAfIDhlh4EXIUhlsb4p8xOS0BUgGA6dbFZp9nXhMhHxe6twvdOtgA9X9fQ2AxTlBgCSwGAYaqeJbAYhBgqIpnCSwGAYaqeJbAYhBgqIpnCSwGAYaqeJbAYhBgqIpnCSwGAYaqeJbAYhBgqIpnCSwGAYaqeJbAYhBgqIpnCSwGAYaqeJbAYhBgqP4B+Ph8n73djkoAAAAASUVORK5CYII="></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=index') {
                            echo ' active';} ?>" aria-current="page" href="index.php?seite=index">Frage 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question2') {
                            echo ' active';} ?>" href="index.php?seite=question2">Frage 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question3') {
                            echo ' active';} ?>" href="index.php?seite=question3">Frage 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question4') {
                            echo ' active';} ?>" href="index.php?seite=question4">Frage 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question5') {
                            echo ' active';} ?>" href="index.php?seite=question5">Frage 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question6') {
                            echo ' active';} ?>" href="index.php?seite=question6">Frage 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question7') {
                            echo ' active';} ?>" href="index.php?seite=question7">Frage 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question8') {
                            echo ' active';} ?>" href="index.php?seite=question8">Frage 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question9') {
                            echo ' active';} ?>" href="index.php?seite=question9">Frage 9</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($_SERVER['REQUEST_URI'] === '/index.php?seite=question10') {
                            echo ' active';} ?>" href="index.php?seite=question10">Frage 10</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-5 flex-shrink-0">