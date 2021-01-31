<div class="container">
	<h2>Edit Data Katalog</h2>
	<div class="row">
		<div class="col-12">
		<?php foreach ($pemesanan as $pms) : ?>
			<form action="<?php echo site_url('admin/pemesanan/edit/'. $pms->id_pesanan) ?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-5">
						<div class="form-group">
			        		<label>Kode Pemesanan</label>
			        		<input type="text" name="id_pesanan" class="form-control" value="<?php echo $pms->id_pesanan ?>" readonly>
			        	</div>

			        	<div class="form-group">
			        		<label>Nama Pemesan</label>
			        		<input type="text" name="nama_customer" class="form-control" value="<?php echo $pms->nama_customer ?>" readonly>
			        	</div>

			        	<div class="form-group">
			        		<label>Nama Katalog</label>
			        		<input type="text" name="nama_katalog" class="form-control" value="<?php echo $pms->nama_katalog ?>" readonly>
			        	</div>

			        	<div class="form-group">
			        		<label>Tanggal Sewa</label>
			        		<input type="text" name="tanggal_pesan" class="form-control" value="<?php echo $pms->tanggal_pesan ?>" readonly>
			        	</div>

			        	<div class="form-group">
			        		<label>Tanggal Selesai sewa</label>
			        		<input type="text" name="tanggal_kembali" class="form-control" value="<?php echo $pms->tanggal_kembali ?>" readonly>
			        	</div>
					</div>
					<div class="col-5">

			        	<div class="form-group">
			        		<label>Total Harga</label>
			        		<input type="text" name="total_harga" class="form-control" value="<?php echo $pms->total_harga ?>" readonly>
			        	</div>

			        	<div class="form-group">
			        		<label for="status_pembayaran" class="control-label">Status Pembayaran</label>
		                    <div >
		                      <select class="form-control" id="status_pembayaran" name="status_pembayaran">
		                        <option value="menunggu pembayaran">Belum bayar</option>
		                        <option value="lunas">Lunas</option>
		                    </select>
		                    </div>
			        	</div>

			        	<div class="form-group">
			        		<label>Gambar</label>
			        		<img src="<?php echo base_url('uploads/'.$pms->bukti_pembayaran) ?>" width="100" class="thumbnail">
			        		<input type="file" class="form-control" name="userfile">
			        		<small class="text-danger"><?php echo form_error('userfile') ?></small>
			        	</div>
					</div>
				</div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Edit</button>
		      </div>
	      	</form>
	      <?php endforeach; ?>
		</div>
	</div>

		
</div>