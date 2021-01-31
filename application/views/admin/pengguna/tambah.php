<div class="container">
	<h2>Tambah Data Pengguna</h2>
	<div class="row">
		<div class="col-6">
			<form action="<?php echo site_url('admin/pengguna/tambah_pengguna') ?>" method="POST">
					<div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_admin" class="form-control" value="<?php echo set_value('nama_admin') ?>">
                        <small class="text-danger"><?php echo form_error('nama_admin') ?></small>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                        <small class="text-danger"><?php echo form_error('username') ?></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>">
                        <small class="text-danger"><?php echo form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <p>Otomatis dibuatkan oleh sistem, default password yaitu <b>123456</b></p>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role_admin" class="form-control">
                        	<option value="">-Pilih-</option>
                        	<option value="admin" <?php echo (set_value('role_admin') == 'admin')? 'selected':''; ?>>Admin</option>
                        	<option value="owner" <?php echo (set_value('role_admin') == 'ownmer')? 'selected':''; ?>>Owner</option>
                        </select>
                        <small class="text-danger"><?php echo form_error('role_admin') ?></small>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Submit</button>
				</form>
		</div>
	</div>

		
</div>