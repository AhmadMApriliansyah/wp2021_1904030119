              <?php

                require 'functions.php';
                $camaba = query("SELECT * FROM calon_mhs");
                if (isset(($_POST['cari']))) {
                    $camaba = cari($_POST['keyword']);
                }
                ?>

              <!doctype html>
              <html lang="en">

              <head>
                  <!-- Required meta tags -->
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">

                  <!-- Bootstrap CSS -->
                  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

                  <title>CRUD</title>
              </head>

              <body>
                  <!-- navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light bg-dark fi">
                      <div class="container-fluid">
                          <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
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
                  </nav>
                  <!--sidebar-->
                  <div class="row">
                      <div class="col-md-2 bg-secondary ">
                          <!--menu-->
                          <ul class="nav flex-column">
                              <li class="nav-item">
                                  <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dhasboard</a>
                                  <hr class="bg-dark">

                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
                                  <hr>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input Camaba</a>
                                  <hr>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
                                  <hr>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
                              </li>
                          </ul>
                      </div>
                      <div class="col-md-10 p-5 pt-3">
                          <!--conten-->
                          <h3><i class="fas fa-users"></i> Daftar Nama mahasiswa</h3>
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
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">Foto</th>
                                          <th scope="col">Opsi</th>
                                      </tr>
                                  </thead>
                                  <?php if (empty($camaba)) : ?>
                                      <tr>
                                          <td colspan="4" class="alert alert-danger text-center" role="alert">
                                              <p><b>data Mahasiswa tidak ditemukan</b></p>
                                          </td>
                                      </tr>
                                      <<?php endif; ?> <tbody>
                                          <?php $no = 1; ?>
                                          <?php foreach ($camaba as $cmb) : ?>
                                              <tr>
                                                  <th scope="row"><?php echo $no; ?></th>
                                                  <td><?php echo $cmb['Nama']; ?></td>
                                                  <td><img src="image/<?php echo $cmb['foto_maba']; ?>" width="100px"></td>
                                                  <td><a href="detail.php? id=<?= $cmb['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
                                              </tr>
                                              <?php $no++ ?>
                                          <?php endforeach ?>

                                          </tbody>
                              </table>
                          </table>
                      </div>
                  </div>

                  <!-- Optional JavaScript; choose one of the two! -->

                  <!-- Option 1: Bootstrap Bundle with Popper -->
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                  <!-- Option 2: Separate Popper and Bootstrap JS -->
                  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
              </body>

              </html>