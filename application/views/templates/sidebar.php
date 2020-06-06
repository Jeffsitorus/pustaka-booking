<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>
    <hr class="sidebar-divider">
    <!-- Devider-->
    <hr class="sidebar-devider mt-3">
    <!-- Looping Menu-->
    <div class="sidebar-heading">
        Home
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  <?php if ($this->uri->segment(1) == 'admin') {
                                echo "active";
                            } ?>">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa-fire"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <li class="nav-item <?php if ($this->uri->segment(2) == 'kategori') {
                            echo "active";
                        } ?>">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Kategori Buku</span>
        </a>
    </li>
    <li class="nav-item <?php if ($this->uri->segment(1) == 'buku' xor $this->uri->segment(2) == 'kategori') {
                            echo "active";
                        } ?>"">
        <a class=" nav-link pb-0" href="<?= base_url('buku'); ?>">
        <i class="fa fa-fw fa-book"></i>
        <span>Data Buku</span>
        </a>
    </li>
    <li class="nav-item <?php if ($this->uri->segment(2) == 'anggota') {
                            echo "active";
                        } ?>">
        <a class=" nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa-users"></i>
            <span>Data Anggota</span>
        </a>
    </li>
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">
        Transaksi
    </div>
    <li class="nav-item  <?php if ($this->uri->segment(1) == 'pinjam' xor $this->uri->segment(2) == 'daftarbooking') {
                                echo "active";
                            } ?>">
        <a class='nav-link pb-0' href="<?= base_url('pinjam'); ?>">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span> Data Peminjam </span>
        </a>
    </li>
    <li class="nav-item  <?php if ($this->uri->segment(2) == 'daftarbooking') {
                                echo "active";
                            } ?>">
        <a class='nav-link pb-0' href="<?= base_url('pinjam/daftarbooking'); ?>">
            <i class="fa fa-fw fa-list"></i>
            <span> Data Booking </span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">
        Laporan
    </div>
    <li class="nav-item  <?php if ($this->uri->segment(2) == 'laporan_buku') {
                                echo "active";
                            } ?>">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
            <i class="fa fa-fw fa-layer-group"></i>
            <span>Laporan Data Buku</span>
        </a>
    </li>
    <li class="nav-item  <?php if ($this->uri->segment(2) == 'laporan_anggota') {
                                echo "active";
                            } ?>">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
            <i class="fa fa-fw fa-folder"></i>
            <span>Laporan Data Anggota</span>
        </a>
    </li>
    <li class="nav-item  <?php if ($this->uri->segment(2) == 'laporan_pinjam') {
                                echo "active";
                            } ?>">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
            <i class="fa fa-fw fa-folder"></i>
            <span>Laporan Peminjaman</span>
        </a>
    </li>
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar --   > 