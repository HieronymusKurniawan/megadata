<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/template/vendor/swal/sweetalert2.all.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <!-- Meta -->
    <meta name="description" content="Presensi Megadata">
    <meta name="author" content="Megadata">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/template/img/logo-mega.png" />

    <!-- Title -->
    <title>Install | Megadata</title>
</head>

<body>
    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url(); ?>/auth/install_" method="POST" class="sign-in-form">
                    <h2 class="title">INSTALASI</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama_admin" value="<?= old('nama_admin'); ?>" placeholder="Nama Admin" autofocus required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" value="<?= old('email'); ?>" placeholder="Email" autofocus required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" required placeholder="Password" />
                        <input class="checkbox" type="checkbox" onclick="myFunction()">
                        <label for="">Show Password</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password" />
                        <input class="checkbox" type="checkbox" onclick="myFunction2()">
                        <label for="">Show Password</label>
                    </div>
                    <div class="actions">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
            </div>
        </div>
        </form>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <img src="<?= base_url() ?>/assets/template/img/megadata.png" style="width: 140px; height: 80px;" alt="">
                <h3>INSTALASI ADMIN</h3>
            </div>
            <img src="<?= base_url() ?>/assets/template/img/log.svg" class="image" alt="" />
        </div>
    </div>
    </div>

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

        function myFunction2() {
            var x = document.getElementById("confirm_password");
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
    </script>
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script script src="<?= base_url() ?>/assets/template/js/jquery.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/template/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/modernizr.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/moment.js"></script>

    <script src="<?= base_url() ?>/assets/template/js/app.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/main.js"></script>
    <?= session()->getFlashdata('pesan'); ?>
</body>

</html>