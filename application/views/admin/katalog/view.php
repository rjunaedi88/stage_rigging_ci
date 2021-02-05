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

