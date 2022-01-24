
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        //notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        //form open
        echo form_open(base_url('admin/booking/edit/' .$booking->id_booking),' 
          class="form-horizontal"');
      ?>
      <!-- general form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Booking</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Nama</label>
                  <div class="col-md-10">
                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Lengkap" value="<?php echo $booking->nama_pembeli ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input type="email" name="email_pembeli"class="form-control" placeholder="Email Pembeli" value="<?php echo $booking->email_pembeli ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Alamat</label>
                  <div class="col-md-10">
                    <input type="text" name="alamat"class="form-control" placeholder="Alamat" value="<?php echo $booking->alamat ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tlp</label>
                  <div class="col-md-10">
                    <input type="text" name="tlp"class="form-control" placeholder="Tlp" value="<?php echo $booking->tlp ?>" required>
                  </div>
                </div>
                    
                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tujuan</label>
                  <div class="col-md-10">
                    <select name="bandara_tujuan" class="form-control">
                      <?php foreach($jadwal as $jadwal) { ?>
                         <option value= "<?php echo $jadwal->bandara_tujuan ?>" <?php if($booking->bandara_tujuan==$jadwal->bandara_tujuan) { echo "selected"; } ?>>
                            <?php echo $jadwal->bandara_tujuan ?>
                         </option>
                      <?php } ?>
                   </select>
                 </div>
                 </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tgl Berangkat</label>
                  <div class="col-md-10">
                    <input type="date" name="tgl_berangkat"class="form-control"   value="<?php echo $jadwal->tgl_berangkat ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Metode Pembayaran</label>
                  <div class="col-md-10">
                    <input type="text" name="metode_pembayaran"class="form-control"   value="<?php echo $booking->metode_pembayaran ?>" required>
                  </div>
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