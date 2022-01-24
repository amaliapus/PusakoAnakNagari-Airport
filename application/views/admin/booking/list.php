
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pemesanan</h3>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>ALAMAT</th>
					<th>TELEPHON</th>
					<th>TUJUAN</th>
					<th>TGL BERANGKAT</th>
					<th>HARGA TIKET</th>
					<th>METODE PEMBAYARAN</th>
					<th>ACTION</th>
					
				</tr>
			    </thead>
			    <tbody>
					<?php $no=1; foreach($booking as $booking){ ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $booking->nama_pembeli ?></td>
					<td><?php echo $booking->email_pembeli ?></td>
					<td><?php echo $booking->alamat ?></td>
					<td><?php echo $booking->tlp ?></td>
					<td><?php echo $booking->bandara_tujuan ?></td>
					<td><?php echo $booking->tgl_berangkat ?></td>
					<td><?php echo number_format($booking->harga_tiket,'0',',','.') ?></td>
					<td><?php echo $booking->metode_pembayaran ?></td>
					<td>
						<a href="<?php echo base_url('admin/booking/edit/' .$booking->id_booking) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

						<a href="<?php echo base_url('admin/booking/delete/' .$booking->id_booking) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
					<?php }?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>