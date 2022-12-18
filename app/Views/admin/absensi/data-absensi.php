<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-admin'); ?>
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
                                <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $admin->gambar; ?>" alt="User Avatar">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <a href="<?= base_url('admin/profile'); ?>"><i class="icon-user1"></i>Profile</a>
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

            <!-- ABSEN HARI INI -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PRESENSI HARI INI</h5>
                            <?php if ($absensi == null) : ?>
                                <a href="<?= base_url('admin/absen_hari_ini'); ?>" class="btn btn-primary stripes-btn absen-hari-ini">Presensi Hari Ini</a>
                            <?php endif; ?>
                            <div class="table-responsive mt-2">
                                <table id="datatable" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Jumlah Pegawai</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Jumlah Pulang</th>
                                            <th>Jumlah Izin</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if ($absensi != null) : ?>
                                            <tr>
                                                <td><?= ($absensi->jumlah_pegawai != null) ? "$absensi->jumlah_pegawai" : '0'; ?> Pegawai</td>
                                                <td><?= ($absensi->jumlah_absen_masuk != null) ? "$absensi->jumlah_absen_masuk" : '0'; ?> Pegawai</td>
                                                <td><?= ($absensi->jumlah_absen_keluar != null) ? "$absensi->jumlah_absen_keluar" : '0'; ?> Pegawai</td>
                                                <td><?= ($absensi->jumlah_izin != null) ? "$absensi->jumlah_izin" : '0'; ?> Pegawai</td>
                                                <td><?= ($absensi->total_pegawai != null) ? "$absensi->total_pegawai" : '0'; ?> Pegawai</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="<?= base_url('admin/absen'); ?>/<?= $absensi->kode_absensi; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
                                                            <i class="icon-external-link text-info"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- end ABSEN HARI INI -->

            <!-- RIWAYAT ABSEN -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">RIWAYAT PRESENSI</h5>
                            <!-- <?php $masuk = 0; ?>
                            <?php $pulang = 0; ?>
                            <?php $izin = 0; ?> -->
                            <div class="table-responsive">

                                <table id="datatable2" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Jumlah Pegawai</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Jumlah Pulang</th>
                                            <th>Jumlah Izin</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                        <!-- <tr hidden>
                                            <th hidden></th>
                                        </tr>
                                        <tr hidden>
                                            <th hidden></th>
                                        </tr>
                                        <tr hidden>
                                            <th hidden></th>
                                        </tr> -->
                                    </thead>
                                    <tbody>
                                        <?php if ($riwayat_absen != null) : ?>
                                            <?php
                                            $no = 1;

                                            foreach ($riwayat_absen as $absen) : ?>
                                                <?php if ($absen->tgl_absen != date('d-M-Y', time())) : ?>
                                                    <tr>
                                                        <td><?= $absen->tgl_absen; ?></td>
                                                        <td><?= $absen->jumlah_pegawai; ?> Pegawai</td>
                                                        <td><?= ($absen->jumlah_absen_masuk == null) ? 0 : $absen->jumlah_absen_masuk; ?> Pegawai</td>
                                                        <td><?= ($absen->jumlah_absen_keluar == null) ? 0 : $absen->jumlah_absen_keluar; ?> Pegawai</td>
                                                        <td><?= ($absen->jumlah_izin == null) ? 0 : $absen->jumlah_izin; ?> Pegawai</td>
                                                        <td><?= $absen->total_pegawai; ?> Pegawai</td>
                                                        <td>
                                                            <div class="actions">
                                                                <a href="<?= base_url('admin/absen'); ?>/<?= $absen->kode_absensi; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                    <i class="icon-external-link text-info"></i>
                                                                </a>
                                                                <a href="<?= base_url('admin/hapus_absen'); ?>/<?= $absen->kode_absensi; ?>" class="btn-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                                                    <i class="icon-trash text-danger"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <?php $masuk = $masuk + $absen->jumlah_absen_masuk; ?>
                                                        <?php $pulang = $pulang + $absen->jumlah_absen_keluar; ?>
                                                        <?php $izin = $izin + $absen->jumlah_izin; ?>
                                                    </tr>


                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <!-- <tr>
                                                <td>
                                                    Total Masuk :<?= $masuk ?>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Total Pulang :<?= $pulang ?>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Total Izin :<?= $izin ?>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> -->
                                        <?php endif; ?>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- end RIWAYAT ABSEN -->

        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">© Presensi Pegawai By Megadata</div>
        <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

</div>
<!-- *************
				************ Main container end *************
			************* -->
<script>
    $('#datatable').DataTable({
        "ordering": true,
        "lengthMenu": [
            [-1, 5, 10, 25, 50],
            ["All", 5, 10, 25, 50]
        ],
    });

    $('#datatable2').DataTable({
        "ordering": true,
        "lengthMenu": [
            [-1, 5, 10, 25, 50],
            ["All", 5, 10, 25, 50]
        ],
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                // pageSize: 'A4',
                message: null,
                customize: function(doc) {
                    //Remove the title created by datatTables
                    doc.content.splice(0, 1);
                    var now = new Date();
                    var jsDate = now.getDate() + '-' + (now.getMonth() + 1) + '-' + now.getFullYear();
                    doc.pageMargins = [60, 60, 20, 30];
                    doc.defaultStyle.fontSize = 12;
                    doc.styles.tableHeader.fontSize = 12;

                    doc['header'] = (function() {
                        return {
                            columns: [

                                {
                                    alignment: 'left',
                                    text: 'DATA PRESENSI',
                                    fontSize: 15,
                                    margin: [10, 0]
                                },
                                {
                                    alignment: 'right',
                                    fontSize: 15,
                                    text: 'PT. MEGA ARTHA LINTAS DATA'
                                }
                            ],
                            margin: 20
                        }
                    });
                }
            }, ,
            'print'
        ]
    });

    $('.absen-hari-ini').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Presensi untuk hari ini akan dibuat!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, buat!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {

                document.location.href = href;

            }
        })

    })
</script>
<?= $this->endSection(); ?>