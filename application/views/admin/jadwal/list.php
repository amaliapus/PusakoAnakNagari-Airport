
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Jadwal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<p>
				<a href="http://localhost/PusakoAnakNagari-Airport/admin/jadwal/tambah/" class="btn btn-success">
					<i class="fa fa-plus"></i>Tambah Baru
				</a>
			    </p>
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
					<th>ID JADWAL</th>
					<th>NAMA PESAWAT</th>
					<th>BANDARA BERANGKAT</th>
					<th>BANDARA TUJUAN</th>
					<th>TANGGAL BERANGKAT</th>
					<th>JAM BERANGKAT</th>
					<th>HARGA TIKET</th>
					<th>SEAT</th>
					<th>STATUS</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php $no=1; foreach($jadwal as $jadwal){ ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $jadwal->id_jadwal ?></td>
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
						<a href="<?php echo base_url('admin/jadwal/edit/' .$jadwal->id_jadwal) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

						<a href="<?php echo base_url('admin/jadwal/delete/' .$jadwal->id_jadwal) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
					<?php }?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>