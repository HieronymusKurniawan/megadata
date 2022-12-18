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
    <title>Login | Presensi Megadata</title>
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
                <form action="<?= base_url(); ?>/auth/login" method="POST" class="sign-in-form">
                    <h2 class="title">LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" value="<?= old('email'); ?>" placeholder="Email" autofocus required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>

                        <input type="password" name="password" id="password" required placeholder="Password" value="<?= old('password'); ?>" />
                        <input class="checkbox" type="checkbox" onclick="myFunction()">
                        <label for="">Show Password</label>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>
                <!-- <form action="#" class="sign-up-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nip" placeholder="NIP" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama_pegawai" placeholder="Nama Pegawwai" required />
                    </div>
                    <div class="input-field">
                        <select class="select-single js-states select2" name="jenis_kelamin" title="Select Product Category" data-live-search="true" required>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-field">

                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <textarea name="alamat" id="alamat" cols="30" rows="18" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="no_telepon" placeholder="No Telepon" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="input-field">
                        <input type="file" name="gambar" id="input-foto" placeholder="Foto" onchange="previewImg();" accept=".jpg, .jpeg, .png" required />
                        <img src="<?= base_url('assets/img/pegawai'); ?>/default.jpg" class="img-thumbnail foto-pegawai" alt="Foto Pegawai" style="width: 90%;">
                    </div>
                    <input type="submit" class="btn" value="Register" />
                </form> -->
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="<?= base_url() ?>/assets/template/img/megadata.png" style="width: 140px; height: 80px;" alt="">
                    <h3>ABSENSI PEGAWAI</h3>
                    <!-- <p>
                        Akun Anda Belum Terdaftar? Silahkan Daftar Terlebih Dahulu!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Register
                    </button> -->
                </div>
                <img src="<?= base_url() ?>/assets/template/img/log.svg" class="image" alt="" />
            </div>
            <!-- <div class="panel right-panel">
                <div class="content">
                    <h3>ABSENSI MEGADATA</h3>
                    <p>
                        Sudah Mempunyai Akun? Silahkan Login.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Login
                    </button>
                </div>
                <img src="<?= base_url() ?>/assets/template/img/log.svg" class="image" alt="" />
            </div> -->
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