<div class="container">
	<h2>Katalog Produk</h2>

	<!-- <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Katalog</button> -->
  <a href="<?php echo site_url('admin/katalog/tambah_katalog') ?>" class="btn btn-sm btn-primary mb-3">Tambah Katalog</a>
  <?php
          if($this->session->flashdata('alert')){
            echo $this->session->flashdata('alert');
          }
        ?>
	<table class="table table-bordered datatables">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Foto</th>
			<th colspan="3">Aksi</th>
		</tr>

		<tr>
			<?php 
			$no = 1;
			foreach ($katalog as $k) : ?>
			<td><?php echo $no++ ?></td>
			<td><?php echo $k->nama_katalog ?></td>
			<td><?php echo $k->deskripsi ?></td>
			<td><?php echo $k->harga ?></td>
			<td><img src="<?php echo base_url('uploads/'.$k->gambar) ?>" width="100" class="thumbnail"></td>
      <td>
        <a href="<?php echo site_url('admin/katalog/edit_katalog/'.$k->id_katalog) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
        <a href="<?php echo site_url('admin/katalog/hapus/'.$k->id_katalog) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus ?')"><i class="fa fa-trash"></i></a>
      </td>
			
		</tr>
			<?php endforeach; ?>
	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_katalog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT KATALOG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo validation_errors(); ?>
        <form action="<?php echo base_url() . 'admin/katalog/tambah'; ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Katalog</label>
        		<input type="text" name="nama" class="form-control">	
        	</div>
        	<div class="form-group">
        		<label>Deskripsi</label>
        		<input type="text" class="form-control" name="deskripsi">
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" class="form-control" name="harga">
        	</div>
        	<div class="form-group">
        		<label>Foto</label>
        		<input type="file" class="form-control" name="foto">
        	</div>
      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
      </div>
    </div>
  </div>
</div>