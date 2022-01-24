
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        // Notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        // Form open
        echo form_open(base_url('admin/jadwal/edit/' .$jadwal->id_jadwal),' 
          class="form-horizontal"');
      ?>
      <!-- general form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Jadwal</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Airlines</label>
                  <div class="col-md-10">
                    <input type="text" name="nama_pesawat" class="form-control" placeholder="Nama Pesawat" value="<?php echo $jadwal->nama_pesawat ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Bandara Berangkat</label>
                  <div class="col-md-10">
                    <input type="text" name="bandara_berangkat"class="form-control" placeholder="Bandara Berangkat" value="<?php echo $jadwal->bandara_berangkat ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Bandara Tujuan</label>
                  <div class="col-md-10">
                    <input type="text" name="bandara_tujuan"class="form-control" placeholder="Bandara Tujuan" value="<?php echo $jadwal->bandara_tujuan ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tgl Berangkat</label>
                  <div class="col-md-10">
                    <input type="date" name="tgl_berangkat"class="form-control" placeholder="Tanggal Berangkat" value="<?php echo $jadwal->tgl_berangkat ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Takeoff</label>
                  <div class="col-md-10">
                    <input type="time" name="jam_berangkat"class="form-control" placeholder="Jam Berangkat" value="<?php echo $jadwal->jam_berangkat ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Harga</label>
                  <div class="col-md-10">
                    <input type="number" name="harga_tiket"class="form-control" placeholder="harga Tikett" value="<?php echo $jadwal->harga_tiket ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Seat</label>
                  <div class="col-md-10">
                    <input type="number" name="seat"class="form-control" value="<?php echo $jadwal->seat ?>" required>
                  </div>
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