 <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/minishop/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>">Home</a></span> <span>Pesan </span></p>
            <h1 class="mb-0 bread">Konfirmasi Tiket</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- ISI -->
<section class="ftco-section ftco-cart">
    <div class="container">
         <?php if($this->session->flashdata('sukses')){ ?>
                <div class="alert alert-success">
                <?php echo $this->session->flashdata('sukses'); ?>
              </div>
             <?php  }?>
        <text name="pemberitahuan1">Pembatalan pesanan yang sudah dibayar ditanggung pemesan. Pihak bandara TIDAK MELAYANI REFUND atas dasar pembatalan yang dilakukan oleh pihak pemesan. Jika Jadwal dibatalkan oleh pihak bandara, harap cek E-mail atau hubungi Tlp bandara untuk informasi lebih lanjut. 
          <br>

        Jika Anda membatalkan pemesanan, nama Anda akan terhapus otomatis dari listKonfirmasi Tiket.</text><br><br>
        <h3 class="mb-4 billing-heading">Konfirmasi Tiket</h3>
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <table class="table table-bordered table-hover" id="example1">
            <thead>
                  <tr class="thead-light">
                    <th>ID PEMESANAN</th>
                    <th>NAMA PEMBELI</th>
                    <th>BANDARA TUJUAN</th>
                    <th>TANGGAL BERANGKAT</th>
                    <th>JAM BERANGKAT</th>
                    <th>TOTAL HARGA</th>
                    <th>METODE PEMBAYARAN</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($booking as $booking){ ?>
                <tr>
                    <th><?php echo $booking->id_booking ?></th>
                    <th><?php echo $booking->nama_pembeli ?></th>
                    <th><?php echo $booking->bandara_tujuan ?></th>
                    <th><?php echo $booking->tgl_berangkat ?></th>
                    <th><?php echo $booking->jam_berangkat ?></th>
                    <th><?php echo number_format($booking->harga_tiket,'0',',','.') ?></th>
                    <th><?php echo $booking->metode_pembayaran ?></th>
                    <th>
                        <a href="<?php echo base_url('konfirmasi/konfirmasi/' .$booking->id_booking) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Konfirmasi</a>

                        <a href="<?php echo base_url('konfirmasi/delete/' .$booking->id_booking) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin membatalkan pesanan ini?')"><i class="fa fa-trash"></i>Batal Pesan</a>
                    </th>
                </tr>
                    <?php }?>
            </tbody>
        </table>
          </div>
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section> <!-- .section -->