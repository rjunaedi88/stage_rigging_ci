<!DOCTYPE html>
<html>
<head>
  <title>
    <?php echo $title ?> | Tunggal Rigging
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="/css/all.css">
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="<?php echo base_url() ?>assets/img/tr.png" height="30">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('Beranda') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('katalog') ?>">Katalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('contact') ?>">Contact Us</a>
        </li>
        <?php if($this->session->userdata('c_login') == true){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Akun
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url('akun') ?>">Data Diri</a>
            <a class="dropdown-item" href="<?php echo base_url('status') ?>">Status Pemesanan</a>
            <a class="dropdown-item" href="<?php echo base_url('login/keluar') ?>">Keluar</a>
          </div>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>


