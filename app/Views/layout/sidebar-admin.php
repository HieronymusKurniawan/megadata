<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="<?= base_url(); ?>/assets/template/img/mega.png" alt="Megadata">
            </a>
            <a href="<?= base_url('admin'); ?>" class="nav-link <?= $menu['dashboard']; ?>" aria-controls="tab-home" aria-selected="true">
                <i class="icon-home2"></i>
                <span class="nav-link-text">Dashboards</span>
            </a>
            <a href="<?= base_url('admin/pegawai'); ?>" class="nav-link <?= $menu['pegawai']; ?>" aria-controls="tab-master" aria-selected="true">
                <i class="icon-users"></i> <span class="nav-link-text">Pegawai</span>
            </a>
            <a href="<?= base_url('admin/jabatan'); ?>" class="nav-link <?= $menu['jabatan']; ?>" aria-controls="tab-master" aria-selected="true">
                <i class="icon-briefcase"></i> <span class="nav-link-text">Jabatan</span>
            </a>
            <a href="<?= base_url('admin/absensi'); ?>" class="nav-link <?= $menu['absensi']; ?>" aria-controls="tab-master" aria-selected="true">
                <i class="icon-date_range"></i> <span class="nav-link-text">Data Presensi</span>
            </a>
            <a href="<?= base_url('admin/pengaturan_absen'); ?>" class="nav-link <?= $menu['pengaturan_absen']; ?>" aria-controls="tab-master" aria-selected="true">
                <i class="icon-settings1"></i> <span class="nav-link-text">Setting Presensi</span>
            </a>
        </div>
        <!-- Tabs nav end -->
    </div>
    <!-- Sidebar content end -->

</nav>
<!-- Sidebar wrapper end -->