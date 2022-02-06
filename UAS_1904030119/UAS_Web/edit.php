<?php

require 'functions.php';
$id = $_GET['id'];
$databarang = query("SELECT * FROM data_barang WHERE id= $id");

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
  alert('data berhasil di edit');
  document.location.href ='index.php';
  </script>";
  } else {
    echo
    "<script>
  alert('data tidak berhasil di edit');
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
    <h3><i class="fas fa-shoe-prints"></i> Edit Data Barang</h3>
    <hr>
    <form method="POST" action="">
      <div class="form-group">

        <input type="hidden" class="form-control" value="<?= $databarang['id'] ?>" name="id">

        <label for="Nama">Nama</label>
        <input type="text" class="form-control" id="nama_barang" value="<?= $databarang['nama_barang'] ?>" placeholder="nama_barang" name="nama_barang" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">harga_barang</label>
        <input type="text" class="form-control" id="harga_barang" value="<?= $databarang['harga_barang'] ?>" placeholder="harga_barang" name="harga_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">stock_barang</label>
        <input type="text" class="form-control" id="stok_barang" value="<?= $databarang['stok_barang'] ?>" placeholder="stok_barang" name="stok_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="foto_maba">Foto</label>
        <input type="text" class="form-control" id="foto_barang" value="<?= $databarang['foto_barang'] ?>" placeholder="foto_barang" name="foto_barang" required autocomplete="off">
      </div>
      <tr><button type="submit" class="btn btn-success" name="edit">Simpan</button></tr>
      <td><a href="barangsatu.php" class="btn btn-primary" role="button">Kembali</td>
    </form>
  </div>
</body>