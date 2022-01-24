 <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/minishop/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>">Home</a></span> <span>Pesan </span></p>
            <h1 class="mb-0 bread">Pesan Tiket</h1>
          </div>
        </div>
      </div>
    </div>
		    			
<?echo form_open(base_url('pemesanan/datapesan/'.$jadwal->id_jadwal)); ?>              
  <!-- ISI -->
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 ftco-animate">
  					<form action="" method="post" class="billing-form">
              <?php if($this->session->flashdata('sukses')){ ?>
                  <div class="alert alert-success">
                  <?php echo $this->session->flashdata('sukses'); ?>
                  <a href = "<?php echo base_url('Konfirmasi')?>">Click Here</a>
                </div>
               <?php  }?>
  						<h3 class="mb-4 billing-heading">Pengisian Data</h3>
            	<div class="row align-items-end">
            		<div class="col-md-12">
                  <div class="form-group">
                  	<label for="nama_pembeli">Nama</label>
                    <input type="text" name="nama_pembeli" class="form-control" placeholder="" value="<?php echo set_value('nama_pembeli') ?>" required>
                  </div>
                </div>
                <!-- email tlp -->
                  <div class="w-100"></div>
  	            <div class="col-md-6">
                  <div class="form-group">
                  	<label for="tlp">Phone</label>
                    <input type="text" name="tlp" class="form-control" placeholder="" value="<?php echo set_value('tlp') ?>" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  	<label for="email_pembeli">Email</label>
                    <input type="text" name="email_pembeli" class="form-control" placeholder="" value="<?php echo set_value('email_pembeli') ?>" required>
                  </div>
              </div>
              <!-- alamat -->
              <div class="col-md-12">
                  <div class="form-group">
                  	<label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="" value="<?php echo set_value('alamat') ?>" required>
                  </div>
                </div>

                	<!-- bandara -->
  	            <div class="w-100"></div>
  	            <div class="col-md-6">
                  <div class="form-group">
                  	<label for="bandara_berangkat">Bandara Berangkat</label>
                    <input type="text" name="bandara_berangkat" class="form-control" value="<?php echo $jadwal->bandara_berangkat ?>" readonly>
                  </div>
                </div>

  	            <div class="col-md-6">
                  <div class="form-group">
                  	<label for="bandara_tujuan">Bandara Tujuan</label>
                    <input type="text" name="bandara_tujuan" class="form-control" value="<?php echo $jadwal->bandara_tujuan ?>" readonly>
                  </div>
                </div>
  	          
  	          <!-- tgl & jam -->
  	          <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                  	<label for="date">Tanggal Keberangkatan</label>
                    <input type="date" name="tgl_berangkat" class="form-control" value="<?php echo $jadwal->tgl_berangkat ?>" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  	<label for="time">Jam Keberangkatan</label>
                    <input type="time" name="jam_berangkat" class="form-control" value="<?php echo $jadwal->jam_berangkat ?>" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="time">Harga Tiket</label>
                    <input type="text" name="harga_tiket" class="form-control" value="<?php echo $jadwal->harga_tiket ?>" readonly>
                  </div>
                </div>
                <!-- Tag tutup container buar ukuran Pembayaran pas-->
              </div>
            

            <div class="row mt-5 pt-3 d-flex">
            	<div class="col-md-6 d-flex">
            		<div class="cart-detail cart-total bg-light p-3 p-md-4">
            			<h3 class="billing-heading mb-4">PERHATIAN</h3>
                  <hr>
                  <span>Pastikan seluruh data terisi dengan baik dan benar serta pilihlah metode pembayaran sesuai dengan apa yang anda inginkan.</span>
  	    					<hr>
  	    					<span>Klik tombol "Lanjut Pembayaran" untuk menyimpan data dan melanjutkan ke proses berikutnya.</span>
                  
  							</div>
            	</div>
            	<div class="col-md-6">
            		<div class="cart-detail bg-light p-3 p-md-4">
            			<h3 class="billing-heading mb-4">Metode Pembayaran</h3>
  								<div class="form-group">
  									<div class="col-md-12">
  										<div class="radio">
  										   <label><input type="radio" name="metode_pembayaran" value="BCA" class="mr-2" required> BCA </label>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="col-md-12">
  										<div class="radio">
  										   <label><input type="radio" name="metode_pembayaran" value="Mandiri" class="mr-2" required> Mandiri </label>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="col-md-12">
  										<div class="radio">
  										   <label><input type="radio" name="metode_pembayaran" value="BRI" class="mr-2" required> BRI </label>
  										</div>
  									</div>
                    <br>
  								<div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary py-3 px-4">Lanjut Pembayaran</button>
                  </div> 
              </div>
  							</div>
            	</div>
            </div>
            </form><!-- END -->
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->

<?php echo form_close(); ?>