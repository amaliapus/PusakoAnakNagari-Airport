
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Konfirmasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<p>
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
					<th>NAMA PEMBELI</th>
					<th>EMAIL PEMBELI</th>
					<th>TLP</th>
					<th>TANGGAL PEMBAYARAN</th>
					<th>ATAS NAMA</th>
					<th>REKENING</th>
					<th>NOMINAL TRANSFER</th>
					<th>METODE PEMBAYARAN</th>
					<th>STATUS</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php $no=1; foreach($konfirmasi as $konfirmasi){ ?>
				<tr>
					<td><?php echo $konfirmasi->nama_pembeli ?></td>
					<td><?php echo $konfirmasi->email_pembeli ?></td>
					<td><?php echo $konfirmasi->tlp ?></td>
					<td><?php echo $konfirmasi->tgl_pembayaran ?></td>
					<td><?php echo $konfirmasi->atas_nama ?></td>
					<td><?php echo $konfirmasi->rekening ?></td>
					<td><?php echo number_format($konfirmasi->nominal_transfer,'0',',','.') ?></td>
					<td><?php echo $konfirmasi->metode_pembayaran ?></td>
					<td><?php echo $konfirmasi->status ?></td>
					
					<td>
						<a href="<?php echo base_url('admin/konfirmasi/edit/' .$konfirmasi->id_konfirmasi) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

						<a href="<?php echo base_url('admin/konfirmasi/delete/' .$konfirmasi->id_konfirmasi) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
					<?php }?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>