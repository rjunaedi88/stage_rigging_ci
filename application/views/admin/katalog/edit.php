<div class="container">
	<h2>Edit Data Katalog</h2>
	<div class="row">
		<div class="col-6">
		<?php foreach ($katalog as $ktg) : ?>
			<form action="<?php echo site_url('admin/katalog/edit_katalog/'. $ktg->id_katalog) ?>" method="post" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<label>Nama Katalog</label>
	        		<input type="text" name="nama_katalog" class="form-control" value="<?php echo $ktg->nama_katalog ?>">
	        		<input type="hidden" name="id_katalog" class="form-control" value="<?= $ktg->id_katalog ?>">	
	        		<small class="text-danger"><?php echo form_error('nama_katalog') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Deskripsi</label>
	        		<input type="text" class="form-control" name="deskripsi" value="<?= $ktg->deskripsi ?>">
	        		<small class="text-danger"><?php echo form_error('deskripsi') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" class="form-control" name="harga" value="<?= $ktg->harga ?>">
	        		<small class="text-danger"><?php echo form_error('harga') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Gambar</label>
	        		<img src="<?php echo base_url('uploads/'.$ktg->gambar) ?>" width="100" class="thumbnail">
	        		<input type="file" class="form-control" name="userfile">
	        		<small class="text-danger"><?php echo form_error('userfile') ?></small>
	        	</div>
	      
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Edit</button>
		      </div>
	      	</form>
	      <?php endforeach; ?>
		</div>
	</div>

		
</div>