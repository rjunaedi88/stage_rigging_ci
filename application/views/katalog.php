    <!-- ======= katalog Section ======= -->
    <section id="katalog" class="katalog mt-5">
      <div class="container">

        <div class="section-title">
          <h2>katalog</h2>
        </div>
        <?php
    if($this->session->flashdata('alert')){
      echo $this->session->flashdata('alert');
    }
  ?>

        <div class="row">
        <?php foreach ($katalog as $k) : ?> 
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3><?php echo $k->nama_katalog ?></h3>
              <img src="<?php echo base_url(). 'uploads/'.$k->gambar ?>" class="card-img-top">
              <p class="mt-4"><?php echo $k->deskripsi ?></p>
              <span>Rp. <?php echo $k->harga ?> / Hari</span>
              <div class="btn-wrap">
                <a href="<?php echo site_url('pemesanan/index/' . $k->id_katalog) ?>" class="btn-buy">Pesan</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End katalog Section -->