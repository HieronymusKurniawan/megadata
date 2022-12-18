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
            <!-- Row start -->
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <button class="btn btn-primary stripes-btn btn-ordering" type="button">ordering data</button>
                                        <button class="btn btn-success stripes-btn btn-export" type="button">Export data</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-end">
                                        <a href="<?= base_url('admin/tambah_pegawai'); ?>" class="btn btn-primary">Tambah Data</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="d-flex justify-content-end">
                                <a href="<?= base_url('admin/tambah_pegawai'); ?>" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="table-responsive mt-3">

                                <table id="table-excel-pdf" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th hidden>Jenis Kelamin</th>
                                            <th hidden>Alamat</th>
                                            <th hidden>No Telepon</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($pegawai != null) : ?>
                                            <?php foreach ($pegawai as $p) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="media-box">
                                                            <img src="<?= base_url('assets/img/pegawai'); ?>/<?= $p->gambar; ?>" class="media-avatar" alt="Customer">
                                                            <div class="media-box-body">
                                                                <a href="#"><?= $p->nama_pegawai; ?></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?= $p->nip; ?></td>
                                                    <td><?= $p->nama_jabatan; ?></td>

                                                    <td>
                                                        <?php if ($p->is_active == 1) : ?>
                                                            <span class="badge bg-success">Active</span>
                                                        <?php else : ?>
                                                            <span class="badge bg-danger">Deactive</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $p->email; ?></td>

                                                    <td hidden><?= $p->jenis_kelamin; ?></td>
                                                    <td hidden><?= $p->alamat; ?></td>
                                                    <td hidden><?= $p->no_telepon; ?></td>
                                                    <td>
                                                        <div class="actions">
                                                            <a href="javascript:void(0);" class="btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" data-id_pegawai="<?= $p->id_pegawai; ?>">
                                                                <i class="icon-edit1 text-info"></i>
                                                            </a>
                                                            <a href="<?= base_url('admin/hapus_pegawai'); ?>/<?= $p->id_pegawai; ?>" class="btn-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                <i class="icon-x-circle text-danger"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->
            <!-- Row end -->

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

<!-- Modal Edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/edit_pegawai_'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow-y: scroll;">

                    <input class="form-control" id="id_pegawai" type="hidden" name="id_pegawai" required>
                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" id="nip" type="text" name="nip" required>
                        <div class="field-placeholder">NIP <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" id="nama_pegawai" type="text" name="nama_pegawai" required>
                        <div class="field-placeholder">Nama Pegawai <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <select class="select-single js-states" id="jenis_kelamin" name="jenis_kelamin" title="Select Product Category" data-live-search="true" required>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="field-placeholder">Jenis Kelamin <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <select class="form-select" id="jabatan" name="jabatan" title="Select Product Category" data-live-search="true" required>
                            <?php foreach ($jabatan as $j) : ?>
                                <option value="<?= $j->id_jabatan; ?>">
                                    <?= $j->nama_jabatan; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="field-placeholder">Jabatan <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" id="alamat" type="text" name="alamat" required>
                        <div class="field-placeholder">Alamat <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" id="no_telepon" type="text" name="no_telepon" required>
                        <div class="field-placeholder">No Telepon <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" type="email" id="email" name="email" required>
                        <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input class="form-control" type="text" id="password" name="password" required>
                        <div class="field-placeholder">Password <span class="text-danger">*</span></div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <select class="form-select" id="is_active" name="is_active" title="Select Product Category" data-live-search="true" required>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                        <div class="field-placeholder">Is Active <span class="text-danger">*</span></div>
                    </div>

                    <!-- Field wrapper end -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="gambar"></div>
                        </div>
                    </div>
                    <!-- Field wrapper start -->

                    <div class="field-wrapper mt-3">
                        <input class="form-control" type="file" name="gambar" id="input-foto" onchange="previewImg();" accept=".jpg, .jpeg, .png">
                        <div class="field-placeholder">Gambar</div>
                        <div class="form-text">
                            Foto Pegawai.
                        </div>
                    </div>
                    <!-- Field wrapper end -->
                    <input type="hidden" name="gambar_lama" id="gambar_lama">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.btn-edit').click(function() {
        var id_pegawai = $(this).data('id_pegawai');

        $.ajax({
            type: 'post',
            dataType: 'JSON',
            data: {
                id_pegawai: id_pegawai,
            },
            url: "<?= base_url('admin/edit_pegawai') ?>",
            success: function(data) {
                $.each(data, function(id_pegawai, nip, nama_pegawai, jenis_kelamin, jabatan, email, password, gambar, is_active, role) {
                    $("#id_pegawai").val(data.id_pegawai);
                    $("#nip").val(data.nip);
                    $("#nama_pegawai").val(data.nama_pegawai);
                    $("#jenis_kelamin").val(data.jenis_kelamin);
                    $("#jabatan").val(data.jabatan);
                    $("#alamat").val(data.alamat);
                    $("#no_telepon").val(data.no_telepon);
                    $("#email").val(data.email);
                    $("#password").val(data.password);
                    var gambar = `<img src="<?= base_url('assets/img/pegawai'); ?>/` + data.gambar + `" class="img-thumbnail foto-pegawai" alt="Foto Pegawai" style="width: 90%;">`;
                    $(".gambar").html(gambar);
                    $("#gambar_lama").val(data.gambar);
                    $("#is_active").val(data.is_active);
                });
            }
        })
    });

    function previewImg() {
        const gambar = document.querySelector('#input-foto');
        const imgPreview = document.querySelector('.foto-pegawai');

        const filegambar = new FileReader();
        filegambar.readAsDataURL(gambar.files[0]);

        filegambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    var table = $('#table-excel-pdf').DataTable({
        "ordering": true,
        // "lengthMenu": [
        //     [-1, 5, 10, 25, 50],
        //     ["All", 5, 10, 25, 50]
        // ],
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                orientation: 'landscape',
                pageSize: 'A4',
                message: null,
                customize: function(doc) {
                    //Remove the title created by datatTables
                    doc.content.splice(0, 1);
                    var now = new Date();
                    var jsDate = now.getDate() + '-' + (now.getMonth() + 1) + '-' + now.getFullYear();
                    doc.pageMargins = [20, 60, 20, 30];
                    doc.defaultStyle.fontSize = 8;
                    doc.styles.tableHeader.fontSize = 8;

                    doc['header'] = (function() {
                        return {
                            columns: [

                                {
                                    alignment: 'left',
                                    text: 'DATA PEGAWAI',
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

                    doc['footer'] = (function(page, pages) {
                        return {
                            columns: [{
                                    alignment: 'left',
                                    text: ['Created on: ', {
                                        text: jsDate.toString()
                                    }]
                                },
                                {
                                    alignment: 'right',
                                    text: ['page ', {
                                        text: page.toString()
                                    }, ' of ', {
                                        text: pages.toString()
                                    }]
                                }
                            ],
                            margin: 20
                        }
                    });

                    // var objLayout = {};
                    // objLayout['hLineWidth'] = function(i) {
                    //     return .5;
                    // };
                    // objLayout['vLineWidth'] = function(i) {
                    //     return .5;
                    // };
                    // objLayout['hLineColor'] = function(i) {
                    //     return '#aaa';
                    // };
                    // objLayout['vLineColor'] = function(i) {
                    //     return '#aaa';
                    // };
                    // objLayout['paddingLeft'] = function(i) {
                    //     return 4;
                    // };
                    // objLayout['paddingRight'] = function(i) {
                    //     return 4;
                    // };
                    // doc.content[0].layout = objLayout;
                }
            },
            'print'
        ]
    });
</script>
<?= $this->endSection(); ?>