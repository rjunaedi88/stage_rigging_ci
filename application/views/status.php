  <section class="section">
    <div class="container">
      <div class="section-title">
        <h3>Status Pemesanan</h3>
        <button type="button" class="btn btn-primary"><?php echo $invoice->status_pembayaran ?></button>
      </div>
      <div>
        <p>Nama Customer : <?php echo $invoice->nama_customer ?> <br>
        Alamat : <?php echo $invoice->alamat ?> <br>
        No Telpon : <?php echo $invoice->telepon ?> <br>
        Email : <?php echo $invoice->email ?></p>
      </div>

      <div class="table-responsive">
      	<table class="table table-bordered table-striped">
      		<thead>
      			<tr>
              <th>Kode Pemesanan</th>
      				<th>Nama Katalog</th>
      				<th>Deskripsi</th>
              <th>Lama Sewa</th>
      				<th>Alamat Event</th>
              <th>Harga</th>
              <th>Total</th>
      			</tr>
      		</thead>
      		<tbody>
      			<tr>
              <td><?php echo $invoice->id_pesanan ?></td>   
              <td><?php echo $invoice->nama_katalog ?></td>   
              <td><?php echo $invoice->deskripsi ?></td>   
              <td><?php echo $hari ?> hari</td>   
              <td><?php echo $invoice->alamat_event?></td>   
              <td><?php echo $invoice->harga ?></td>   
              <td><?php echo $total_harga ?></td>   
            </tr>
      		</tbody>
      	</table>
      </div>
      <?php if($invoice->status_pembayaran == "menunggu pembayaran"){ ?>
      <p>* Silahkan anda membayar melalui rekening bank kami di BCA 1790078221 a/n CV Tunggal Ringging <br>
      Jika sudah melakukan pembayaran, kirimkan bukti pembayaran melalui whatapps ke nomer 082222222222
      Maka tim survey kami akan menghubungi anda</p>
      <?php } elseif($invoice->status_pembayaran == "lunas") { ?>
      <p>Pembayaran sudah lunas</p>
      <?php } ?>
    </div>
</section>