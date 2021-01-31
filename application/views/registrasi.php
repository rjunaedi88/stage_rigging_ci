
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
              </div>
              <?php echo $this->session->flashdata('alert') ?>
              <form action="<?php echo site_url('registrasi') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-sm-4 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_customer" class="form-control" placeholder="Nama Lengkap">
                      <small class="text-danger"><?php echo form_error('nama_customer'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                      <small class="text-danger"><?php echo form_error('username'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Telepon/Hp</label>
                    <div class="col-sm-8">
                      <input type="text" name="telepon" class="form-control" placeholder="Telepon/Hp">
                      <small class="text-danger"><?php echo form_error('telepon'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                      <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                      <small class="text-danger"><?php echo form_error('email'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <small class="text-danger"><?php echo form_error('password'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Foto KTP</label>
                    <div class="col-sm-8">
                      <input type="file" name="userfile" class="form-control">
                      <small class="text-danger"><?php echo form_error('userfile'); ?></small>
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Buat Akun</button>
                  </div>
                </div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('login') ?>">Sudah punya akun ? Silahkan login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
