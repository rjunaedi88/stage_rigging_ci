  <section class="section" style="margin-top:50px">
    <div class="container">
      <div class="section-title">
        <h3>Pembayaran</h3>
      </div>
        <div class="row">
          <div class="col-6">
          <p>Nama Customer : <?php echo $invoice->nama_customer ?> <br>
          Alamat : <?php echo $invoice->alamat ?> <br>
          No Telpon : <?php echo $invoice->telepon ?> <br>
          Email : <?php echo $invoice->email ?><br>
          Tanggal Pemakaian : <?php echo $invoice->tanggal_pemakaian ?> s/d <?php echo $invoice->tanggal_selesai ?>
        </p></div>

        <div class="col-6 text-right">
          <p><b>Tunggal Rigging</b><br>Alamat : Jl. Pasir putih Rt 01 Rw 01 No 09<br> Kel. Pasir putih Kec. Sawangan Kota Depok<br>No Telp : 0813-1043-2037</p>
        </div>
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

      <p>* Silahkan anda membayar melalui rekening bank kami di BCA 1790078221 a/n CV Tunggal Ringging. <br>
      Jika sudah melakukan pembayaran, Upload bukti pembayaran di menu status pemesanan.</p>

    <a href="<?php echo base_url('beranda') ?>" class="btn btn-sm btn-primary">Kembali ke home</a>
    <a href="<?php echo base_url('status') ?>" class="btn btn-sm" style="color:#fff;background: rgb(92, 159, 36);">Cek status pemesanan</a>
    </div>
</section>