<div class="container">
	<h2>Data Pemesanan</h2>

  <?php
    if($this->session->flashdata('alert')){
      echo $this->session->flashdata('alert');
    }
  ?>

	<table class="table table-bordered datatables">
		<tr>
			<th>No</th>
			<th>Kode Pemesanan</th>
			<th>Tanggal Awal</th>
			<th>Tanggal Akhir</th>
      		<th>Nama Pemesan</th>
			<th>Nama Katalog</th>
			<th>Alamat Event</th>
			<th>Status Pembayaran</th>
			<th>Total Harga</th>
			<th>Bukti Pembayaran</th>
			<th colspan="3">Aksi</th>
		</tr>

		<tr>
			<?php 
			$no = 1;
			foreach ($pemesanan as $pesanan) : ?>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pesanan->id_pesanan ?></td>
			<td><?php echo $pesanan->tanggal_pesan ?></td>
			<td><?php echo $pesanan->tanggal_kembali ?></td>
			<td><?php echo $pesanan->nama_customer ?></td>
			<td><?php echo $pesanan->nama_katalog ?></td>
			<td><?php echo $pesanan->alamat_event ?></td>
			<td><?php echo $pesanan->status_pembayaran ?></td>
			<td><?php echo $pesanan->total_harga ?></td>
			<td><img src="<?php echo base_url('uploads/'.$pesanan->bukti_pembayaran) ?>" width="100" class="thumbnail"></td>
      <td>
        <a href="<?php echo site_url('admin/pemesanan/edit/'.$pesanan->id_pesanan) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
      </td>
			
		</tr>
			<?php endforeach; ?>
	</table>
</div>
