<table class="table table-bordered datatables">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Kode Pemesanan</th>
								<th>Tgl. Pemesanan</th>
								<th>Nama Pemesan</th>
								<th>Alamat Event</th>
								<th>Status Pembayaran</th>
								<th>Total Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($pemesanan as $r => $v){ ?>
							<tr>
								<td><?php echo $r + 1 ?></td>
								<td><?php echo $v['id_pesanan'] ?></td>
								<td><?php echo date('d/m/Y', strtotime($v['tanggal_pesan'])) ?></td>
								<td><?php echo $v['nama_customer'] ?></td>
								<td><?php echo $v['alamat_event'] ?></td>
								<td><?php echo $v['status_pembayaran'] ?></td>
								<td>Rp. <?php echo number_format($v['total_harga']) ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>