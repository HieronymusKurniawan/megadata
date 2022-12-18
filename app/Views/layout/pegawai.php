<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Presensi Megadata">
  <meta name="author" content="Megadata">
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/template/img/logo-mega.png">
  <!-- Title -->
  <title><?= $judul_halaman; ?></title>


  <!-- *************
			************ Common Css Files *************
		************ -->
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/bootstrap.min.css">

  <!-- Icomoon Font Icons css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/fonts/style.css">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/main.css">


  <!-- *************
			************ Vendor Css Files *************
		************ -->

  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="<?= base_url(); ?>/assets/template/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/js/modernizr.js"></script>
  <script src="<?= base_url(); ?>/assets/template/js/moment.js"></script>
  <script src="<?= base_url(); ?>/assets/template/vendor/swal/sweetalert2.all.js"></script>

  <!-- PLUGIN -->
  <?= $plugin; ?>

</head>

<body>

  <!-- Loading wrapper start -->
  <div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
  </div>
  <!-- Loading wrapper end -->

  <!-- Page wrapper start -->
  <div class="page-wrapper">
    <?= $this->renderSection('content'); ?>
  </div>
  <!-- Page wrapper end -->

  <!-- *************
			************ Required JavaScript Files *************
		************* -->
  <!-- *************
			************ Vendor Js Files *************
		************* -->

  <!-- Slimscroll JS -->
  <script src="<?= base_url(); ?>/assets/template/vendor/slimscroll/slimscroll.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/vendor/slimscroll/custom-scrollbar.js"></script>

  <!-- Main Js Required -->
  <script src="<?= base_url(); ?>/assets/template/js/main.js"></script>

</body>

</html>