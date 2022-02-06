<?php


require 'functions.php';
if (!isset($_GET['id'])) {
  header("location :barangsatu.php");
  exit;
}

$id = $_GET['id'];
$namabarang = query("SELECT * FROM data_barang WHERE id=$id");
//var_dump($camaba[0], ['nama']);

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
  <!--conten-->
  <div class="col-md-10 p-5 pt-3">
    <!--conten-->
    <h3><i class="fas fa-shoe-prints"></i> Detail Data Sepatu Sneakers</h3>
    <hr>
    <ul class="list-group">
      <li class="list-group-item active">nama_barang :<?= $namabarang['nama_barang']; ?></li>
      <li class="list-group-item">harga_barang :<?= $namabarang['harga_barang']; ?> </li>
      <li class="list-group-item">stok_barang : <?= $namabarang['stok_barang']; ?></li>
      <li class="list-group-item">foto_barang :<img src="assets/sepatuuu.jpg?= $namabarang['foto_barang']; ?>" width="90px"></li>
      <li><a href="edit.php? id=<?= $namabarang['id']; ?>" class="btn btn-warning" role="button">Edit</a>
        <a href="hapus.php" class="btn btn-danger" role="button">Hapus</a>
        <a href="barangsatu.php" class="btn btn-primary" role="button">Kembali</a>
      </li>
    </ul>
  </div>