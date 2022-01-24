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
		    			
<!-- ISI -->
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 ftco-animate">
      	<?php if($this->session->flashdata('sukses')){ ?>
                <div class="alert alert-success">
                <?php echo $this->session->flashdata('sukses'); ?>
                <a href = "<?php echo base_url('Konfirmasi')?>">Click Here</a>
              </div>
             <?php  }?>
      	<text name="pemberitahuan1">Jadwal dapat berubah sewaktu-waktu. Harap melakukan pengecekan secara berkala mengenai informasi jadwal keberangkatan. Jika Jadwal dibatalkan oleh pihak bandara, harap cek E-mail Anda atau hubungi Tlp bandara untuk informasi lebih lanjut. </text><br><br>
					<form action="#" class="billing-form">
						<h3 class="mb-4 billing-heading">Jadwal Keberangkatan</h3>
         <div class="row block-12 ">
          <div class="col-xl-10 ftco-animate">
			<table class="table table-bordered table-hover" id="example1">
			<thead>
                  <tr>
					<th>NAMA PESAWAT</th>
					<th>BANDARA BERANGKAT</th>
					<th>BANDARA TUJUAN</th>
					<th>TANGGAL BERANGKAT</th>
					<th>JAM BERANGKAT</th>
					<th>HARGA</th>
					<th>TOTAL SEAT</th>
					<th>STATUS</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php $no=1; foreach($jadwal as $jadwal){ ?>
				<tr>
					<td><?php echo $jadwal->nama_pesawat ?></td>
					<td><?php echo $jadwal->bandara_berangkat ?></td>
					<td><?php echo $jadwal->bandara_tujuan ?></td>
					<td><?php echo $jadwal->tgl_berangkat ?></td>
					<td><?php echo $jadwal->jam_berangkat ?></td>
					<td><?php echo number_format($jadwal->harga_tiket,'0',',','.') ?></td>
					<td><?php echo $jadwal->seat ?></td>
					<td><?php
						if($jadwal->seat == "0")
						{
							echo "<span class = 'badge badge-danger'>Tidak tersedia</span>";
						}else{
							echo "<span class = 'badge badge-primary'>Tersedia</span>";
						}
					?>

					<td>
						 <?php 
		                  if($jadwal->seat >= 1) {
		                  echo anchor('pemesanan/datapesan/'.$jadwal->id_jadwal,'<span class="btn btn-warning btn-xs"><i class="fa fa-edit">Pesan</span>');
		                  }else{
		                    echo "<span class='btn btn-danger btn-xs'>Tiket Habis</span>";
		                }?>
				</td>
			</tr>
				<?php }?>
			</tbody>
		</table>
		</div>
          </div>
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section> <!-- .section -->