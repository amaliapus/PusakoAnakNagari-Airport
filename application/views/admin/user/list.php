
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kumpulan data user</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<p>
				<a href="http://localhost/PusakoAnakNagari-Airport/admin/user/tambah" class="btn btn-success">
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
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>USERNAME</th>
					<th>LEVEL</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php $no=1; foreach($user as $user){ ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $user->nama ?></td>
					<td><?php echo $user->email ?></td>
					<td><?php echo $user->username ?></td>
					<td><?php echo $user->akses_level ?></td>
					<td>
						<a href="<?php echo base_url('admin/user/edit/' .$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

						<a href="<?php echo base_url('admin/user/delete/' .$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
					<?php }?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>