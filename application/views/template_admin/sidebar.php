<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Tunggal Rigging</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <?php if($this->session->userdata('a_global')->role_admin == 'admin'){ ?>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/katalog') ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Katalog</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/customer') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Customer</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/pemesanan') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pemesanan</span></a>
      </li>
      <?php }elseif($this->session->userdata('a_global')->role_admin == 'owner'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pengguna') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pengguna</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_pesanan') ?>">Laporan Pemesanan</a>
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_pesanan/cetak_laporan_customer') ?>">Laporan Customer</a>
          </div>
        </div>
      </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('a_global')->nama_admin ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('admin/dashboard/up_pass') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
                <a class="dropdown-item" href="<?php echo site_url('admin/auth/logout') ?>" onclick="return confirm('Yakin ingin keluar dari sistem ?')">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>


            <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $this->session->userdata('a_global')->nama_admin ?>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('admin/auth/logout') ?>" onclick="return confirm('Yakin ingin keluar dari sistem ?')"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                    </li>
                </ul>
            </li> -->

            
          </ul>

        </nav>
        <!-- End of Topbar -->