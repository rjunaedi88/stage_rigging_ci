<div class="container">
 	<div class="row text-center mt-5">
    <?php foreach ($katalog as $k) : ?> 
      <div class="card ml-3 mt-5 mr-4" style="width: 21rem;">
        <img src="<?php echo base_url(). 'uploads/'.$k->gambar ?>" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title mb-1"><?php echo $k->nama_katalog ?></h3>
          <h5><?php echo $k->deskripsi ?></h5>
          <p>Rp. <?php echo $k->harga ?> / Hari</p>
          <a href="<?php echo site_url('pemesanan/index/' . $k->id_katalog) ?>" class="btn btn-sm btn-primary">Pesan</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
 </div>