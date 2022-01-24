
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        //notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        //form open
        echo form_open(base_url('admin/jadwal/tambah'),' 
          class="form-horizontal"');
      ?>
      <!-- general form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pengguna</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Airlines</label>
                  <div class="col-md-10">
                    <input type="text" name="nama_pesawat" class="form-control" placeholder="Nama Pesawat" value="<?php echo set_value('nama_pesawat') ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Bandara Berangkat</label>
                  <div class="col-md-10">
                    <select name="bandara_berangkat" class="form-control">
                      <option values="bandara_berangkat">Pusako Anak Nagari</option>
                      <option values="User">Pekan Baru</option>
                   </select>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Bandara Tujuan</label>
                  <div class="col-md-10">
                    <select name="bandara_tujuan" class="form-control">
                      <option values="bandara_tujuan">Pusako Anak Nagari</option>
                      <option values="User">Pekan Baru</option>
                   </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tgl berangkat</label>
                  <div class="col-md-10">
                    <input type="date" name="tgl_berangkat"class="form-control" placeholder="Tanggal Berangkat" value="<?php echo set_value('tgl_berangkat') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Takeoff</label>
                  <div class="col-md-10">
                    <input type="time" name="jam_berangkat"class="form-control" placeholder="Jam Berangkat" value="<?php echo set_value('jam_berangkat') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Harga</label>
                  <div class="col-md-10">
                    <input type="number" name="harga_tiket"class="form-control" placeholder="Harga Tiket" value="<?php echo set_value('harga_tiket') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Seat</label>
                  <div class="col-md-10">
                    <input type="number" name="seat"class="form-control" placeholder="Total Seat" value="<?php echo set_value('seat') ?>" required>
                  </div>
                </div>

                <!-- Tag tutup -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <label class="col-md-2 control-label"></label>
                  <button 
                  class="btn btn-primary" name="submit" type="submit"><i class="fa fa-save"></i> Simpan
                 </button>
                  <button 
                  class="btn btn-danger" name="reset" type="reset"><i class="fa fa-times"></i> Reset
                </button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /.card -->

<?php echo form_close(); ?>