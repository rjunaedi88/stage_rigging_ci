<!-- <div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Form Ubah Password
			</div>
			<div class="panel-body">
                <?php
                    if($this->session->flashdata('alert')){
                        echo $this->session->flashdata('alert');
                    }
                ?>
				<form action="<?php echo site_url('admin/upassword') ?>" method="POST">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass1" class="form-control">
                        <small class="text-danger"><?php echo form_error('pass1') ?></small>
                    </div>
                    <div class="form-group">
                        <label>Ulangi Password</label>
                        <input type="password" name="pass2" class="form-control">
                        <small class="text-danger"><?php echo form_error('pass2') ?></small>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Submit</button>
				</form>
			</div>
		</div>
	</div>
</div> -->

<div class="container">
    <div class="col-6">
    <?php
        if($this->session->flashdata('alert')){
            echo $this->session->flashdata('alert');
        }
    ?>
        <h2>Form Ubah Password</h2>
        <form action="<?php echo site_url('admin/dashboard/up_pass') ?>" method="POST">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass1" class="form-control">
                <small class="text-danger"><?php echo form_error('pass1') ?></small>
            </div>
            <div class="form-group">
                <label>Ulangi Password</label>
                <input type="password" name="pass2" class="form-control">
                <small class="text-danger"><?php echo form_error('pass2') ?></small>
            </div>
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Submit</button>
        </form>
    </div>
</div>