<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="<?= base_url(); ?>/assets/template/img/mega.png" alt="Megadata">
            </a>
            <a href="<?= base_url('pegawai'); ?>" class="nav-link <?= $menu['dashboard']; ?>" aria-controls="tab-home" aria-selected="true">
                <i class="icon-home2"></i>
                <span class="nav-link-text">Dashboards</span>
            </a>
            <a href="<?= base_url('pegawai/absensi'); ?>" class="nav-link <?= $menu['absensi']; ?>" aria-controls="tab-home" aria-selected="true">
                <i class="icon-date_range"></i>
                <span class="nav-link-text">Data Presensi</span>
            </a>
        </div>
        <!-- Tabs nav end -->
    </div>
    <!-- Sidebar content end -->

</nav>
<!-- Sidebar wrapper end -->