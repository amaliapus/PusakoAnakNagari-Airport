<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Review</h3>
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
						<th>SUBJECT</th>
						<th>COMMENT</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($review as $review){ ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $review->nama_tamu ?></td>
					<td><?php echo $review->email ?></td>
					<td><?php echo $review->subject ?></td>
					<td><?php echo $review->comment ?></td>
					<!-- <td>
						<a href="<?php echo base_url('admin/review/delete/' .$review->id_review) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
					</td> -->
				</tr>
					<?php $no++; }?>
				</tbody>
			</table>
		</div>
	</div>
</div>
