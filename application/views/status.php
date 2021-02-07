  <section class="section" style="margin-top:50px">
    <div class="container">
      <div class="section-title">
        <h3>Status Pemesanan</h3>
        <button type="button" class="btn" style="color:#fff;background: rgb(92, 159, 36);"><?php echo $invoice->status_pembayaran ?></button>
      </div>
      <div>
        <p>Nama Customer : <?php echo $invoice->nama_customer ?> <br>
        Alamat : <?php echo $invoice->alamat ?> <br>
        No Telpon : <?php echo $invoice->telepon ?> <br>
        Email : <?php echo $invoice->email ?> <br>
        Tanggal Pemesanan : <?php echo $invoice->tanggal_pesan ?> s/d <?php echo $invoice->tanggal_kembali ?></p></p>
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
      <p>** Silahkan anda membayar melalui rekening bank kami di BCA 1790078221 a/n CV Tunggal Ringging <br>
      Jika sudah melakukan pembayaran, kirimkan bukti pembayaran melalui whatapps ke nomer <a href="https://api.whatsapp.com/send?phone=6289652858789&text=Hallo%20Admin">089652858789</a>
      Maka tim survey kami akan menghubungi anda.</p>
      <a href="https://api.whatsapp.com/send?phone=6289652858789&text=Hallo%20Admin"><img src="<?php echo base_url() ?>assets_user/img/wa_icon.png" width="50px"></a>
      
      <?php } elseif($invoice->status_pembayaran == "lunas") { ?>
      <p>Pembayaran sudah lunas</p>
      <a href="<?php echo base_url('status/cetak_laporan_pemesanan') ?>" class="btn btn-sm btn-info">Cetak Laporan Pemesanan</a>
      <?php } ?>
    </div>
</section>
