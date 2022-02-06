<?php
require 'functions.php';
include('koneksi.php');

if (isset($_POST['simpan'])) {
  if (simpan($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di tambah');
    document.location.herf = 'kritik.php';
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
        <a class="navbar-brand text-white " href="#">KRITIK DAN SARAN PENGUNJUNG</a>
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
    <form method="POST" action="">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Kritik dan Saran</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
      </div>
    </form>
    <tr><button type="submit" class="btn btn-success" name="simpan">Simpan</button></tr>
    <td><a href="index.html" class="btn btn-info" role="button">Kembali</td>