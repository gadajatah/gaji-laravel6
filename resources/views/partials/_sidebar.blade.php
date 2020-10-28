<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="/assets/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Penggajian</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-user-friends"></i>
            <span>Karyawan</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
                <a class="collapse-item" href="#">Semua Karyawan</a>
            </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DatacollapseBootstrap"
            aria-expanded="true" aria-controls="DatacollapseBootstrap">
            <i class="fas fa-table"></i>
            <span>Data</span>
        </a>
        <div id="DatacollapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
                <a class="collapse-item" href="{{ route('positions.index') }}">Data Jabatan</a>
                <a class="collapse-item" href="{{ route('workers.index') }}">Data Karyawan</a>
                <a class="collapse-item" href="#">Data Absensi</a>
            </div>
    </li>
</ul>
