
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        // Notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        // Form open
        echo form_open(base_url('admin/konfirmasi/edit/' .$konfirmasi->id_konfirmasi),' 
          class="form-horizontal"');
      ?>
      <!-- general form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Konfirmasi</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Nama</label>
                  <div class="col-md-10">
                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Pembeli" value="<?php echo $konfirmasi->nama_pembeli?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input type="text" name="email_pembeli"class="form-control" placeholder="Email Pembeli" value="<?php echo $konfirmasi->email_pembeli ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tlp</label>
                  <div class="col-md-10">
                    <input type="text" name="tlp"class="form-control" placeholder="tlp" value="<?php echo $konfirmasi->tlp ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Tgl Pembayaran</label>
                  <div class="col-md-10">
                    <input type="date" name="tgl_pembayaran"class="form-control" placeholder="Tanggal Pembayaran" value="<?php echo $konfirmasi->tgl_pembayaran ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Atas Nama</label>
                  <div class="col-md-10">
                    <input type="text" name="atas_nama"class="form-control" placeholder="Jam Berangkat" value="<?php echo $konfirmasi->atas_nama ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Rekening</label>
                  <div class="col-md-10">
                    <input type="text" name="rekening"class="form-control" placeholder="harga Tikett" value="<?php echo $konfirmasi->rekening ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Nominal Transfer</label>
                  <div class="col-md-10">
                    <input type="number" name="nominal_transfer"class="form-control" value="<?php echo $konfirmasi->nominal_transfer ?>" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="col-md-2 col-form-label">Metode Pembayaran</label>
                  <div class="col-md-10">
                    <input type="text" name="metode_pembayaran"class="form-control" value="<?php echo $konfirmasi->metode_pembayaran ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Status</label>
                  <div class="col-md-10">
                    <input type="text" name="status"class="form-control" value="<?php echo $konfirmasi->status ?>">
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