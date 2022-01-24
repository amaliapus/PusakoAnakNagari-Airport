
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Pengguna</h5>
            <br>
            <p class="card-text">
              klik Tambah untuk menuju ke halaman tambah data pengguna. klik List Data untuk menuju ke halaman data pengguna
            </p>

            <a href="<?php echo base_url() ?>admin/user/tambah" class="card-link">Tambah</a>
            <a href="<?php echo base_url() ?>admin/user" class="card-link">Data Pengguna</a>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

            <p class="card-text">
              klik Tambah untuk menuju ke halaman tambah data jadwal. klik List Data untuk menuju ke halaman data Jadwal
            </p>
            <a href="<?php echo base_url() ?>admin/jadwal/tambah" class="card-link">Tambah</a>
            <a href="<?php echo base_url() ?>admin/jadwal" class="card-link">Data Jadwal</a>
          </div>
        </div><!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h5 class="m-0">Data Pemesanan</h5>
          </div>
          <div class="card-body">

            <p class="card-text">Merupakan halaman data pemesanan</p>
            <a href="<?php echo base_url() ?>admin/booking" class="btn btn-primary">Buka</a>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Data Konfirmasi</h5>
          </div>
          <div class="card-body">

            <p class="card-text">Merupakan halaman data konfirmasi pemesanan</p>
            <a href="<?php echo base_url() ?>admin/konfirmasi" class="btn btn-primary">Buka</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->