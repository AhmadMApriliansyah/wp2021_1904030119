<?php
require 'functions.php';
$struktur = query("SELECT * FROM struktur");
include 'koneksi.php';

if (isset(($_POST['search']))) {
  $struktur = cari($_POST['keyword']);
}
?>

<head>
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">
  <link href="UAS_Web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg  text-uppercase bg-info">
    <div class="container-fluid">
      <div class="container">
        <a class="navbar-brand text-white " href="#">STRUKTUR ORGANISASI SEPATUKU.CO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <div class="text-white">
            <?php echo date('l, d-m-y'); ?>
          </div>
        </div>
      </div>
  </nav>
  <div class="col-md-10 p-5 pt-3">
    <!--conten-->
    <h3><i class="fas fa-users"></i> Daftar Struktur Store Sepatuku.co </h3>
    <hr>
    <!--pencarian data-->
    <form action="" method="POST">
      <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
      <button type="submit" class="btn-btn-warning" name="cari">Cari</button>
    </form>
    <table class="table table-striped">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">nama</th>
            <th scope="col">alamat </th>
            <th scope="col">jabatan</th>
            <th scope="col">foto</th>
          </tr>
        </thead>
        <tbody>
          <?php $id = 1; ?>
          <?php
          foreach ($struktur as $struk) : ?>
            <tr>
              <th scope="row"><?php echo $id; ?></th>
              <td><?php echo $struk['nama']; ?></td>
              <td><?php echo $struk['alamat']; ?></td>
              <td><?php echo $struk['jabatan']; ?></td>
              <td><img src="assets/foto2.jpg? <?php echo $struk['foto']; ?>" width="70px"></td>
            </tr>
        </tbody>
        <?php $id++ ?>
      <?php endforeach ?>
      </tbody>
      <td><a href="index.html" class="btn btn-info" role="button">Kembali</td>