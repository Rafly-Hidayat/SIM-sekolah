<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code text-dark"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-dark">Ourflow</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/overview'); ?>">
            <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
            <span class="text-dark">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table text-dark"></i>
            <span class="text-dark">Tables</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-dark">Data Tables:</h6>
                <a class="collapse-item" href="<?= base_url('/mapel'); ?>">Mapel</a>
                <a class="collapse-item" href="<?= base_url('/dosen'); ?>">Dosen</a>
                <a class="collapse-item" href="<?= base_url('/jurusan'); ?>">Jurusan</a>
                <a class="collapse-item" href="<?= base_url('/siswa'); ?>">Siswa</a>
                <a class="collapse-item" href="<?= base_url('/nilai'); ?>">Nilai</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <!--   <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
 -->
    <!-- Nav Item - Tables -->
    <!--    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>