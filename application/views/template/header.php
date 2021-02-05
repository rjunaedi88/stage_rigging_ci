


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    <?php echo $title ?> | Tunggal Rigging
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets_user/img/favicontr.png" rel="icon">
  <link href="<?php echo base_url() ?>assets_user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets_user/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets_user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets_user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v2.2.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h5 class="logo mr-auto"><a href="<?php echo base_url('Beranda') ?>" style="color:rgb(92, 159, 36);">Tunggal Rigging</a></h5>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets_user/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?php echo base_url('Beranda') ?>">Home</a></li>
          <li><a href="<?php echo base_url('contact') ?>">Contact</a></li>
          <li><a href="<?php echo base_url('katalog') ?>">Katalog</a></li>
          <?php if($this->session->userdata('c_login') == true){ ?>
            <li class="drop-down"><a href="">Akun</a>
              <ul>
                <li><a href="<?php echo base_url('akun') ?>">Data Diri</a></li>
                <li><a href="<?php echo base_url('status') ?>">Status Pemesanan</a></li>
                <li><a href="<?php echo base_url('login/keluar') ?>" onclick="return confirm('Yakin ingin keluar web ?')">Keluar</a></li>
              </ul>
            </li>
          <?php } else { ?>
          <li><a href="<?php echo base_url('login') ?>">Login</a></li>
          <?php } ?>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->