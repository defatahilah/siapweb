<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/Dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN SIAPWEB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-archive"></i>
            <span>Rekap</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('Admin'); ?>">Admin</a>
                <a class="collapse-item" href="<?= base_url('Aplikasi'); ?>">Aplikasi</a>
                <a class="collapse-item" href="<?= base_url('Email'); ?>">Email</a>
                <a class="collapse-item" href="<?= base_url('Website'); ?>">Website</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-upload"></i>
            <span>Input Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('Tambah_Admin'); ?>">Admin</a>
                <a class="collapse-item" href="<?= base_url('Tambah_Aplikasi'); ?>">Aplikasi</a>
                <a class="collapse-item" href="<?= base_url('Tambah_Email'); ?>">Email</a>
                <a class="collapse-item" href="<?= base_url('Tambah_Website'); ?>">Website</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('C_Admin/Kontak'); ?>" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Pesan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>

<!-- End of Sidebar -->