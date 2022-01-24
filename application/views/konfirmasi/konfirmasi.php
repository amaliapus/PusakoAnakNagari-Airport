 <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/minishop/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>">Home</a></span> <span>Pesan </span></p>
            <h1 class="mb-0 bread">Data Konfirmasi</h1>
          </div>
        </div>
      </div>
    </div>

<?echo form_open(base_url('konfirmasi/konfirmasi/'.$booking->id_booking)); ?>              
<!-- ISI -->
<section class="ftco-section">
  <div class="row block-9 ">
          <div class="col-md-6 order-md-last d-flex container">
                    <form action="" method="post" class="billing-form">
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
              echo form_open_multipart(base_url('konfirmasi/konfirmasi'),' class="form-horizontal"');
              ?> 

            <?php if($this->session->flashdata('sukses')){ ?>
                <div class="alert alert-success">
                <?php echo $this->session->flashdata('sukses'); ?>
              </div>
             <?php  }?>
                        <h3 class="mb-4 billing-heading">Konfirmasi Pembayaran</h3>
                        <h4 class="mb-4 billing-heading">ID Booking: <?php echo $booking->id_booking ?></h4>

            <div class="row align-items-end">
                <div class="col-md-12">
                <div class="form-group">
                    <label for="nama_pembeli">Nama</label>
                  <input type="text" name="nama_pembeli" class="form-control" placeholder="" value="<?php echo $booking->nama_pembeli ?>" readonly>
                </div>
              </div>
              <!-- email tlp -->
                <div class="w-100"></div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="tlp">Phone</label>
                  <input type="text" name="tlp" class="form-control" placeholder="" value="<?php echo $booking->tlp ?>" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="email_pembeli">Email</label>
                  <input type="text" name="email_pembeli" class="form-control" placeholder="" value="<?php echo $booking->email_pembeli ?>" readonly>
                </div>
            </div>
            <!-- metode pembayaran -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Metode Pembayaran</label>
                  <input type="text" name="metode_pembayaran" class="form-control" placeholder="" value="<?php echo $booking->metode_pembayaran ?>" readonly>
                </div>
              </div>

              <!-- REKENING PEMBELI -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Rekening Bank</label>
                  <input type="text" name="rekening" class="form-control" placeholder="ex. Mandiri " value="<?php echo set_value('rekening') ?>" required>
                </div>
              </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Atas Nama</label>
                  <input type="text" name="atas_nama" class="form-control" placeholder="" value="<?php echo set_value('atas_nama') ?>" required>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Nominal Pembayaran</label>
                  <input type="text" name="nominal_transfer" class="form-control" placeholder="" value="<?php echo set_value('nominal_transfer') ?>" required>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Tanggal Pembayaran</label>
                  <input type="date" name="tgl_pembayaran" class="form-control" placeholder="" value="<?php echo set_value('tgl_pembayaran') ?>" required>
                </div>
              </div>

              <!-- <div class="col-md-12">
                <div class="form-group">
                    <label>Bukti Pembayaran</label>
                  <input type="file" name="gambar" class="form-control" required="required">
                </div>
              </div> -->

            </div>
            <br>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary py-3 px-5">Konfirmasi</button>
            </div> 
          
          </form><!-- END -->
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section> <!-- .section -->

<?php echo form_close(); ?>