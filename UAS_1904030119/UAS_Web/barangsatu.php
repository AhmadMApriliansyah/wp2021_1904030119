<?php
require 'functions.php';
$namabarang = query("SELECT * FROM data_barang");
include 'koneksi.php';

if (isset(($_POST["cari"]))) {
  $namabarang = cari($_POST["keyword"]);
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
        <a class="navbar-brand text-white " href="#">KATALOG SEPATU</a>
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
    <h3><i class="fas fa-shoe-prints"></i> Daftar Sepatu </h3>
    <hr>
    <!--pencarian data-->
    <form action="" method="POST">
      <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" id="keyword" autocomplete="off">
      <button type="submit" class="btn-btn-warning" name="cari">Cari</button>
    </form>
    <table class="table table-striped">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama_barang</th>
            <th scope="col">harga_barang</th>
            <th scope="col">stok_barang</th>

          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($namabarang = mysqli_fetch_array($result)) { ?>
            <tr>
              <th scope="row"><?php echo $namabarang[0]; ?></th>
              <td><?php echo $namabarang[1]; ?></td>
              <td><?php echo $namabarang[2]; ?></td>
              <td><?php echo $namabarang[3]; ?></td>
              <td><a href="? id=<?= $namabarang['id']; ?>" class="btn btn-primary" role="button"><i class="fas fa-wallet"></i>Beli</a> <a href="detail.php? id=<?= $namabarang['id']; ?>" class="btn btn-warning" role="button"><i class="fas fa-info-circle"></i>Detail</i></a></td>
            </tr>
            <?php $no++ ?>
          <?php } ?>

        </tbody>
        </tbody>
        <td><a href="tambah.php" class="btn btn-success" role="button"><i class="fas fa-edit"></i>Tambah Barang</a>
          <a href="index.html" class="btn btn-info" role="button"><i class="fas fa-caret-square-left"></i>Kembali</a>


</body>