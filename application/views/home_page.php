<!-- <div class="container" style="margin-top:100px">
<?php 
                  if($this->session->flashdata('alert')){
                    echo $this->session->flashdata('alert');
                  }
                ?>
  <div class="row">
    <div class="col-sm-6">
      <img src="<?php echo base_url() ?>assets/img/banner.jpg" width="100%" class="bordered">
    </div>
    <div class="col-sm-6">
      <h2>Tentang Kami</h2>
      <p>Kami sebagai vendor stage rigging menyewakan rigging dan menyewakan panggung untuk kebutuhan event acara anda.<br> Sewa panggung rigging, sewa panggung sewa rigging untuk acara musik di kampus atau sekolah, Sewa panggung rigging, sewa panggung untuk konser acara, Sewa panggung rigging, sewa panggung untuk pernikahan, Sewa panggung rigging, Sewa Panggung untuk acara gathering di kantor.<br> Sewa Rigging dan Sewa Panggung yang kami sediakan berbagai ukuran sesuai kebutuhan sewa rigging anda.</p>
    </div>
  </div>
</div>

 -->
 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets_user/img/slide/slide-4.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Tunggal Riging</h2>
                <p class="animate__animated animate__fadeInUp">Jasa Sewa Stage Rigging</p>
                <div>
                  <a href="<?php echo base_url('katalog') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Katalog</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
      <?php 
        if($this->session->flashdata('alert')){
          echo $this->session->flashdata('alert');
        }
      ?>

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content justify-content-center">
              <h3>Tentang Kami</h3>
              <p>
                Kami sebagai vendor stage rigging menyewakan rigging dan menyewakan panggung untuk kebutuhan event acara anda.<br><br>
                Sewa panggung rigging, sewa panggung sewa rigging untuk acara musik di kampus atau sekolah, Sewa panggung rigging, sewa panggung untuk konser acara, Sewa panggung rigging, sewa panggung untuk pernikahan, Sewa panggung rigging, Sewa Panggung untuk acara gathering di kantor.<br><br>
                Sewa Rigging dan Sewa Panggung yang kami sediakan berbagai ukuran sesuai kebutuhan sewa rigging anda.
              </p>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->