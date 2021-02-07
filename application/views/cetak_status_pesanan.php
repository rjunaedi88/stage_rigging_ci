<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Laporan Pemesanan</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                window.print();
            })
        </script>
    </head>
    <body>
        <section class="section" style="margin-top:50px">
            <div class="container">
              <div class="section-title">
                <h3 class="mb-5">Status Pemesanan</h3>
              </div>
              <div>
                <p>Nama Customer : <?php echo $invoice->nama_customer ?> <br>
                Alamat : <?php echo $invoice->alamat ?> <br>
                No Telpon : <?php echo $invoice->telepon ?> <br>
                Email : <?php echo $invoice->email ?> <br>
                Tanggal Pemesanan : <?php echo $invoice->tanggal_pesan ?> s/d <?php echo $invoice->tanggal_kembali ?></p>
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
              <p>Pembayaran sudah lunas</p>
            </div>
        </section>
    </body>
</html>
