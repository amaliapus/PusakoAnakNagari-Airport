
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Konfigurasi Umum</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<?php
				//notifikasi
					if($this->session->flashdata('sukses')){
						echo '<p class="alert alert-success">';
						echo '</div>';
					}
				?>
			    <?php
					//error upload
					if(isset($error)) { 
					   echo '<p class="alert alert-warning">';
					   echo $error;
					   echo '</p>';
					}
					//notifikasi eror
					echo validation_errors('<div class="alert alert-warning">','</div>');

					//form open
					echo form_open_multipart(base_url('admin/konfigurasi/' .$konfigurasi->id_konfigurasi),' class="form-horizontal"');
					?>
					                
					<div class="form-group">
					   <label class="col-md-2 control-label">Nama Website</label>
					         <div class="col-md-5">
					         <input type="text" name="nama_web" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->nama_web ?>" required>
					      </div>
					 </div>
					<div class="card-footer">
		                <label class="control-label"></label>
		                  <button 
		                  class="btn btn-primary" name="submit" type="submit"><i class="fa fa-save"></i> Simpan
		                 </button>
		                  <button 
		                  class="btn btn-danger" name="reset" type="reset"><i class="fa fa-times"></i> Reset
		                </button>
		              </div>
		          </div>
				</tbody>
			</div>
		</div>
	</div>
</div>