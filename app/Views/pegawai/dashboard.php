<?php

use App\Models\AbsenDetailModel;

$AbsenDetailModel = new AbsenDetailModel();
?>
<?= $this->extend('layout/pegawai'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-pegawai'); ?>
<?= session()->getFlashdata('pesan'); ?>
<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header starts -->
    <div class="page-header">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                <!-- Search container start -->
                <div class="search-container">

                    <!-- Toggle sidebar start -->
                    <div class="toggle-sidebar" id="toggle-sidebar">
                        <i class="icon-menu"></i>
                    </div>
                    <!-- Toggle sidebar end -->

                    <!-- Mega Menu Start -->
                    <div class="cd-dropdown-wrapper" style="opacity: 0;">
                    </div>
                    <!-- Mega Menu End -->

                    <!-- Search input group start -->
                    <div class="ui fluid category search" style="opacity: 0;">
                    </div>
                    <!-- Search input group end -->

                </div>
                <!-- Search container end -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="avatar">
                                <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $pegawai->gambar; ?>" alt="User Avatar">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <a href="<?= base_url('pegawai/profile'); ?>"><i class="icon-user1"></i>Profile</a>
                                <a href="<?= base_url('auth/logout'); ?>"><i class="icon-log-out1"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Page header ends -->

    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">
        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="profile-header">
                        <h1>Selamat Datang, <?= $pegawai->nama_pegawai; ?></h1>
                        <div class="profile-header-content" style="background: #1273eb;">
                            <div class="profile-header-tiles">
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon" style="background: #1273eb;">
                                                <i class="icon-server"></i>
                                            </span>
                                            <h6>Nama - <span><?= $pegawai->nama_pegawai; ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon" style="background: #1273eb;">
                                                <i class="icon-award"></i>
                                            </span>
                                            <h6>NIP - <span><?= $pegawai->nip; ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon" style="background: #1273eb;">
                                                <i class="icon-email"></i>
                                            </span>
                                            <h6><span><?= $pegawai->email; ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-avatar-tile">
                                <img src="<?= base_url('assets/img/pegawai'); ?>/<?= $pegawai->gambar; ?>" class="img-fluid" alt="User Profile" style="width: 170px; height: 125px;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PEMBERITAHUAN ABSEN -->
            <?php if ($absensi != null) : ?>
                <?php $detail_absen = $AbsenDetailModel->getByKodeAndIdPegawai($absensi->kode_absensi, session()->get('id_pegawai')); ?>

                <?php if ($detail_absen != null) : ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- <a href="<?= base_url('pegawai/absensi'); ?>"> -->
                                        <table class="table">
                                            <tr>
                                                <th>Presensi Hari Ini</th>
                                                <td><?= $detail_absen->tgl_absen; ?></td>

                                                <th> Masuk</th>
                                                <td>
                                                    <?php if ($detail_absen->absen_masuk == 0) : ?>
                                                        <span class="badge rounded-pill bg-danger">Belum Presensi</span>
                                                    <?php else : ?>
                                                        <?= date('H : i', $detail_absen->absen_masuk); ?>
                                                        <?php if ($detail_absen->status_masuk == 1) : ?>
                                                            <span class="badge bg-danger">Terlambat</span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </td>

                                                <th> Pulang</th>
                                                <td>
                                                    <?php if ($detail_absen->absen_keluar == 0) : ?>
                                                        <span class="badge bg-danger">Belum Presensi</span>
                                                    <?php else : ?>
                                                        <?= date('H : i', $detail_absen->absen_keluar); ?>
                                                    <?php endif; ?>
                                                </td>

                                                <th> Izin</th>
                                                <td>
                                                    <?php if ($detail_absen->izin == null) : ?>
                                                        <span class="badge bg-primary">Tidak Izin</span>
                                                    <?php else : ?>
                                                        <?php if ($detail_absen->status_izin == 0) : ?>
                                                            <span class="badge bg-primary">Tunggu Persetujuan</span>
                                                        <?php else : ?>
                                                            <span class="badge bg-success">Di Izinkan</span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- </a> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <!-- PEMBERITAHUAN ABSEN -->
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card" style="height: 400px;">
                        <div class="card-body">
                            <h5 class="card-title">Lokasi Kantor</h5>
                            <iframe style="width: 100%; height: 95%;" src="https://www.google.com/maps?q=<?= $pengaturan->latitude; ?>,<?= $pengaturan->longitude; ?>&hl=es;z=14&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Presensi Disini!</h5>
                            <?php if ($absensi == null) : ?>
                                <h5>Presensi Belum Dibuat!</h5>
                            <?php else : ?>
                                <?php $detail_absen = $AbsenDetailModel->getByKodeAndIdPegawai($absensi->kode_absensi, session()->get('id_pegawai')); ?>
                                <?php if ($detail_absen == null) : ?>
                                    <h5>Akun Anda Belum Dapat Presensi!</h5>
                                <?php else : ?>
                                    <tr class="text-nowrap">
                                        <td>
                                            <?php if ($detail_absen->absen_masuk == null || $detail_absen->absen_keluar == null || $detail_absen->izin == null) : ?>
                                                <?php if ($detail_absen->izin == null && $detail_absen->absen_keluar == null) : ?>
                                                    <a href="<?= base_url('pegawai/absen'); ?>/<?= $detail_absen->kode_absensi; ?>" class=" btn btn-info bg-primary" style="width: 100%;">Presensi</a>
                                                <?php endif; ?>

                                                <?php if ($detail_absen->absen_masuk != null && $detail_absen->absen_keluar != null) : ?>
                                                    <a href="<?= base_url('pegawai/detail_absen'); ?>/<?= $detail_absen->kode_absensi; ?>" class="btn btn-info  bg-success" style="width: 100%;">Detail</a>
                                                <?php endif; ?>

                                                <?php if ($detail_absen->absen_masuk == null && $detail_absen->absen_keluar == null && $detail_absen->izin == null) : ?>
                                                    <a href="<?= base_url('pegawai/izin_absen'); ?>/<?= $detail_absen->kode_absensi; ?>" class="btn btn-info bg-success mt-3" style="width: 100%;">Izin</a>
                                                <?php endif; ?>

                                                <?php if ($detail_absen->absen_masuk == null && $detail_absen->absen_keluar == null && $detail_absen->izin != null) : ?>
                                                    <a href="<?= base_url('pegawai/izin_absen'); ?>/<?= $detail_absen->kode_absensi; ?>"" class=" btn btn-info bg-success" style="width: 100%;">Detail</a>
                                                <?php endif; ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Presensi</h5>
                            <button type="button" class="btn btn-info stripes-btn" style="width: 100%;"> Jam Masuk <?= $pengaturan->jam_masuk; ?></button>
                            <button type="button" class="btn btn-info stripes-btn mt-3" style="width: 100%;"> Jam Keluar <?= $pengaturan->jam_keluar; ?></button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">?? Presensi Pegawai By Megadata</div>
        <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

</div>
<!-- *************
				************ Main container end *************
			************* -->
<?= $this->endSection(); ?>