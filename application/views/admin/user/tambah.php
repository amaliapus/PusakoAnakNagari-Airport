
<!-- Main content -->
<div class="container">
    <!-- left column -->
    <div class="col-md-8">
      <?php
        //notifikasi error
        echo validation_errors('<div class="alert alert-warning">','</div>');
        //form open
        echo form_open(base_url('admin/user/tambah'),' 
          class="form-horizontal"');
      ?>
      <!-- general form elements -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pengguna</h3>
            </div>
            <!-- /.card-header -->
           <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Nama</label>
                  <div class="col-md-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo set_value('nama') ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input type="email" name="email"class="form-control" placeholder="Email Pengguna" value="<?php echo set_value('email') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Username</label>
                  <div class="col-md-10">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Password</label>
                  <div class="col-md-10">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Level Hak Akses</label>
                  <div class="col-md-10">
                    <select name="akses_level" class="form-control">
                      <option values="Admin">Admin</option>
                      <option values="User">User</option>
                   </select>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <label class="col-md-2 control-label"></label>
                  <button 
                  class="btn btn-primary" name="submit" type="submit"><i class="fa fa-save"></i> Simpan
                 </button>
                  <button 
                  class="btn btn-danger" name="reset" type="reset"><i class="fa fa-times"></i> Reset
                </button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /.card -->

<?php echo form_close(); ?>