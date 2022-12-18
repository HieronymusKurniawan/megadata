<?php

use App\Models\AdminModel;

$adminModel = new AdminModel();
$admin = $adminModel->asObject()->first();


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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

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
  <script>
    function myFunction() {
      var x = document.getElementById("password");
      var y = document.getElementById("hide1");
      var z = document.getElementById("hide2");

      if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
      } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
      }
    }

    $(document).ready(function() {
      $('.btn-hapus').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
          title: 'Kamu Yakin?',
          text: "Data yg di hapus tidak dapat kembali!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!',
          cancelButtonText: 'Tidak'
        }).then((result) => {
          if (result.isConfirmed) {

            document.location.href = href;

          }
        })

      })
    });
  </script>

</body>

</html>