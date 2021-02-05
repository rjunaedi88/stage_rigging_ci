<div class="container">
	<h2>Data Customer</h2>

  <?php
    if($this->session->flashdata('alert')){
      echo $this->session->flashdata('alert');
    }
  ?>

	<table class="table table-bordered datatables">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No Telepon</th>
			<th>Alamat</th>
      		<th>Email</th>
			<th>Foto Ktp</th>
			<th colspan="3">Aksi</th>
		</tr>

		<tr>
			<?php 
			$no = 1;
			foreach ($customer as $cust) : ?>
			<td><?php echo $no++ ?></td>
			<td><?php echo $cust->nama_customer ?></td>
			<td><?php echo $cust->telepon ?></td>
			<td><?php echo $cust->alamat ?></td>
      <td><?php echo $cust->email ?></td>
			<td><img src="<?php echo base_url('uploads/'.$cust->foto_ktp) ?>" width="100" class="thumbnail"></td>
      <td>
        <a href="<?php echo site_url('admin/customer/hapus/'.$cust->id_customer) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus ?')"><i class="fa fa-trash"></i></a>
      </td>
			
		</tr>
			<?php endforeach; ?>
	</table>
</div>
