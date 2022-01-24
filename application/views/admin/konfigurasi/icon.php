
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        // Error upload
        if(isset($error)) { 
           echo '<p class="alert alert-warning">';
           echo $error;
           echo '</p>';
        }
        // Notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        // Form open
        echo form_open(base_url('admin/konfigurasi/icon/' .$konfigurasi->id_konfigurasi),' class="form-horizontal"');
      ?>
      <!-- General form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Konfigurasi Icon</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <div class="form-group">
               <label class="col-md-2 control-label">Nama Website</label>
                     <div class="col-md-5">
                     <input type="text" name="nama_web" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->nama_web ?>" required>
                  </div>
             </div>

             <div class="form-group">
               <label class="col-md-2 control-label">Upload Icon</label>
                     <div class="col-md-5">
                     <input type="file" name="icon" class="form-control" placeholder="Upload icon" value="<?php echo $konfigurasi->icon ?>" required>
                     Icon lama: <br>
                     <img src="<?php echo base_url('assets/upload/image/').$konfigurasi->icon ?>" class="img img-responsive img-thumbnail" width="200">
                  </div>
             </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <label class="control-label"></label>
                  <button 
                  class="btn btn-primary" name="submit" type="submit"><i class="fa fa-save"></i> Simpan
                 </button>
                  <button 
                  class="btn btn-danger" name="reset" type="reset"><i class="fa fa-times"></i> Reset
                </button>
              </div>
              <!-- Tag tutup -->
              </div>        
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /.card -->

<?php echo form_close(); ?>