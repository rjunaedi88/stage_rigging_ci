  <section class="section" style="margin-top:50px">
    <div class="container">
      <div class="section-title">
        <h3>Status Pemesanan</h3>
        <button type="button" class="btn" style="color:#fff;background: rgb(92, 159, 36);"><?php echo $invoice->status_pembayaran ?></button>
      </div>
      <div class="row">
        <div class="col-6">
          <p>Nama Customer : <?php echo $invoice->nama_customer ?> <br>
          Alamat : <?php echo $invoice->alamat ?> <br>
          No Telpon : <?php echo $invoice->telepon ?> <br>
          Email : <?php echo $invoice->email ?> <br>
          Tanggal Pesan : <?php echo $invoice->tanggal_pemesanan ?><br>
          Tanggal Pemakaian : <?php echo $invoice->tanggal_pemakaian ?> s/d <?php echo $invoice->tanggal_selesai ?></p>
        </div>
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
      <?php if($invoice->status_pembayaran == "menunggu pembayaran"){ ?>
      <p>** Silahkan anda membayar melalui rekening bank kami di BCA 1790078221 a/n CV Tunggal Ringging <br>
      Jika sudah melakukan pembayaran, silahkan upload bukti pembayaran</a>
      Maka tim survey kami akan menghubungi anda.</p>
      
      <a href="<?php echo site_url('status/upload_bukti/'.$invoice->id_pesanan) ?>" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Upload Bukti Pembayaran</a>
      
      <?php } elseif($invoice->status_pembayaran == "lunas") { ?>
      <p>Pembayaran sudah lunas</p>
      <a href="<?php echo base_url('status/cetak_laporan_pemesanan') ?>" class="btn btn-sm btn-info">Cetak Laporan Pemesanan</a>
      <?php } elseif ($invoice->status_pembayaran = "Proses Check") { ?>
        <p>Terimakasih, Pembayaran anda sedang kami proses</p>
      <?php } ?> 
    </div>
</section>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('status/upload_bukti/'. $invoice->id_pesanan) ?>" method="post" enctype="multipart/form-data">
          <div class="form-group" hidden>
            <label>Nama Pemesan</label>
            <input type="text" name="nama_customer" class="form-control" value="<?php echo $invoice->id_pesanan ?>" readonly>
          </div>
          <div class="form-group">
            <label>Bukti pembayaran</label>
            <input type="file" name="bukti_pembayaran" class="form-control">  
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>
