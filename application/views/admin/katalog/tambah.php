<div class="container">
	<h2>Tambah Data Katalog</h2>
	<div class="row">
		<div class="col-6">
			<form action="<?php echo site_url() . 'admin/katalog/tambah_katalog'; ?>" method="post" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<label>Nama Katalog</label>
	        		<input type="text" name="nama_katalog" class="form-control">	
	        		<small class="text-danger"><?php echo form_error('nama_katalog') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Deskripsi</label>
	        		<input type="text" class="form-control" name="deskripsi">
	        		<small class="text-danger"><?php echo form_error('deskripsi') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" class="form-control" name="harga">
	        		<small class="text-danger"><?php echo form_error('harga') ?></small>
	        	</div>
	        	<div class="form-group">
	        		<label>Gambar</label>
	        		<input type="file" class="form-control" name="userfile">
	        		<small class="text-danger"><?php echo form_error('userfile') ?></small>
	        	</div>
	      
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
	      	</form>
		</div>
	</div>

		
</div>