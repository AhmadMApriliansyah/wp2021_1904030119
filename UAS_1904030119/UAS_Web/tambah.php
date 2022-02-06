<?php

require 'functions.php';
include('koneksi.php');

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di tambah');
    document.location.herf = 'barangsatu.php';
    </script>";
  } else {
    "<script>
    alert('data gagal di tambah');
    </script>";
  }
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
    <h3><i class="fas fa-keyboard"></i> Input Data Barang</h3>
    <hr>
    <form method="POST" action="">
      <div class="form-group">
        <label for="Nama">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" placeholder="nama_barang" name="nama_barang" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">Harga Barang</label>
        <input type="text" class="form-control" id="harga_barang" placeholder="harga_barang" name="harga_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="stok_barang">Stock Barang</label>
        <input type="text" class="form-control" id="Stok_barang" placeholder="Stok_barang" name="stok_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="foto_maba">Foto Barang</label>
        <input type="text" class="form-control" id="foto_barang" placeholder="foto_barang" name="foto_barang" required autocomplete="off">
      </div>

      <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
      <td><a href="barangsatu.php" class="btn btn-primary" role="button">Kembali</td>
    </form>

  </div>
  </div>