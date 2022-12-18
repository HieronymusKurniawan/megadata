<?php

use CodeIgniter\CLI\CLI;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Presensi Megadata">
    <meta name="author" content="Megadata">
    <link rel="shortcut icon" href="<?= base_url('assets/template'); ?>/img/logo.png" />

    <!-- Title -->
    <title>404 - Error Page</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/template'); ?>/css/main.css">

</head>

<body>

    <div class="error-screen2">
        <img src="<?= base_url('assets/template'); ?>/img/error-screen/globe.svg" class="earth" alt="Earth" />
        <img src="<?= base_url('assets/template'); ?>/img/error-screen/full-moon.png" class="moon" alt="Moon" />
        <img src="<?= base_url('assets/template'); ?>/img/error-screen/rocket.svg" class="rocket" alt="Rocket" />
        <div class="contents">
            <h1>404</h1>
            <h5>Mohon maaf sepertinya<br> halaman yang kamu tuju tidak ada atau sedang dalam perbaikan.</h5>
            <!-- <h5>We're sorry but it looks <br>like that page doesn't exist anymore.</h5> -->
            <a href="<?= base_url('auth'); ?>" class="btn stripes-btn">Back to Home</a>
        </div>
        <div class="astronaut-container">
            <img class="astronaut" src="<?= base_url('assets/template'); ?>/img/error-screen/astronaut.png" alt="Uni Pro Admin">
        </div>
    </div>

</body>

</html>