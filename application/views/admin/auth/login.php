<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form class="user" action="<?php echo base_url('admin/auth/login') ?>" method="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username" value="<?php echo set_value('username') ?>">
                      <small class="text-danger"><?php echo form_error('username') ?></small>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password" value="<?php echo set_value('password') ?>">
                      <small class="text-danger"><?php echo form_error('password') ?></small>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
