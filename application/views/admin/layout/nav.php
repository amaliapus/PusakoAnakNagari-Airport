<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>admin/dasbor" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <!-- DASHBOARD -->
      <li class="nav-item">
        <!-- Membuat menu ACTIVE taro active setelah nav-link-->
        <a href="<?php echo base_url() ?>admin/dasbor" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <!-- PENGGUNA -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-lock"></i>
          <p>
            Pengguna
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/user" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Pengguna</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/user/tambah" class="nav-link">
              <i class="nav-icon fa fa-plus"></i>
              <p>Tambah Pengguna</p>
            </a>
          </li>
        </ul>
      </li>
      

      <!-- Jadwal Pesawat -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Jadwal Pesawat
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/jadwal" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Jadwal</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/jadwal/tambah" class="nav-link">
              <i class="nav-icon fa fa-plus"></i>
              <p>Tambah Jadwal</p>
            </a>
          </li>
        </ul>
      </li>

      <!-- Tiket -->
     <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Pemesanan Tiket
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/booking" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Data Pemesanan</p>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url() ?>admin/konfirmasi" class="nav-link">
          <i class="nav-icon fas fa-clock"></i>
          <p>
            Konfirmasi
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo base_url() ?>admin/review" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Review
          </p>
        </a>
      </li>

      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
