
<body class="bg-gradient-primary">

  <div class="container" style="margin-top:100px">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Profil</h1>
              </div>
              <?php echo $this->session->flashdata('alert') ?>
              <form action="<?php echo site_url('akun/edit_akun/'.$akun->id_customer) ?>" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label class="col-sm-4 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_customer" class="form-control" value="<?= $akun->nama_customer ?>">
                      <input type="hidden" name="id_customer" class="form-control" value="<?= $akun->id_customer ?>">
                      <small class="text-danger"><?php echo form_error('nama_customer'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" value="<?= $akun->username ?>">
                      <small class="text-danger"><?php echo form_error('username'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Telepon/Hp</label>
                    <div class="col-sm-8">
                      <input type="text" name="telepon" class="form-control" value="<?= $akun->telepon ?>">
                      <small class="text-danger"><?php echo form_error('telepon'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" class="form-control" value="<?= $akun->alamat ?>">
                      <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" value="<?= $akun->email ?>">
                      <small class="text-danger"><?php echo form_error('email'); ?></small>
                    </div>
                </div>

                
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn" style="color:#fff;background: rgb(92, 159, 36);"><i class="fa fa-check"></i>Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
